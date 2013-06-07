<?php
require_once 'EmpService.class.php';
	//接收用户要删除的用户ID
	//创建对象实例
	$empService=new EmpService();
	//看看用户是删除用户还是分页
	if(!empty($_GET['flag'])){
		//需要删掉用户
		$id=$_GET['id'];
		//echo "你希望删除的id=".$id;
		if($empService->DelEmpById($id)==1){
			//成功界面
			header("location:ok.php");
		}else {
			//失败
			header("location:error.php");
		}
	}

?>