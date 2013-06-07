<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>雇员信息列表</title>
<script type="text/javascript" language="javascript">
<!--
	function confirmDel(val){
		//window.alert("是否要删除id="+val+"的用户");
		return window.confirm("是否要删除id="+val+"的用户");
	}
//-->
</script>
</head>
<?php 

	require_once 'EmpService.class.php';
	require_once 'FenyePage.class.php';
    require_once("common.php");
    checkUserValid();
	//创建对象实例
	$empService=new EmpService();
	//看看用户是删除用户还是分页
//	if(!empty($_GET['flag'])){
//		//需要删掉用户
//		$id=$_GET['id'];
//		//echo "你希望删除的id=".$id;
//		$empService->DelEmpById($id);
//	}
//	

	//创建一个FenyePage实例
	$fenyePage=new FenyePage();
	
	//给fenyePage初始化必须的数据
	$fenyePage->pageNow=1;
	$fenyePage->pageSize=30;

	if (!empty($_GET['pageNow'])){
		$fenyePage->pageNow=$_GET['pageNow'];
	}
	else{
		if (empty($_GET['flag'])){
			echo "<script type='text/javascript'>alert('请输入正确页码!')</script>";
		}
	}
	
	//调用getFenyePage方法，完成分页
	$empService->getFenyePage($fenyePage);
	//$empService->get_fenye_navigate($fenyePage);
	
	echo "<table border='1px' width='700px' bordercolor='green' cellspacing='0px'>";
	echo "<tr><th>id</th><th>name</th><th>grade</th><th>email</th><th>salary</th><th>删除用户</th><th>修改用户</th></tr>";
	//这里需要循环的显示用户信息
	//现在我们通过数组来取数据

	for ($i=0;$i<count($fenyePage->res_array);$i++){
		$row=$fenyePage->res_array[$i];
		echo "<tr><td>{$row['Id']}</td><td>{$row['NAME']}</td><td>{$row['grade']}</td><td>{$row['email']}</td><td>{$row['salary']}</td>".
		"<td><a onclick='return confirmDel({$row['Id']})' href=empProcess.php?flag=del&id={$row['Id']}>删除</a></td><td><a href='updateEmpUI.php?id={$row['Id']}'>修改</a></td></tr>";
	}
	
	echo "<h1>雇员信息列表</h1>";
	echo "</table>";
	
	//分页导航
	echo $fenyePage->navigate;

	?>
	
	<form action="empList.php">
	跳转到:<input type="text" name="pageNow"></input>
	<input type="submit" name="GO"></input>
	</form>
	
</html>