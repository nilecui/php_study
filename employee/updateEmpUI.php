<HTML>
<HEAD>
<TITLE>修改用户</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
</HEAD>

<?php

	require_once 'EmpService.class.php';

	$id=$_GET['id'];
	//通过id获得用户的其他信息，没有框架只能在这里调用EmpService
	//面向过程，直接查询数据库
	//严格按照mvc怎么做？
	
	//简单封装
	$empService=new EmpService();
//	$arr=$empService->getEmpById($id);
	//echo "arr=".$arr;
	//显示用户
	
	//二次封装
	$emp=$empService->getEmpById($id);
?>

<form method="post" action="empProcess.php">
<!--	<table>-->
<!--	<tr>-->
<!--		<td>名字</td>-->
<!--		<td><input type="text" name="name" value="<?php echo $arr[0]['NAME']?>"></td>-->
<!--	</tr>-->
<!--	<tr>-->
<!--		<td>级别</td>-->
<!--		<td><input type="text" name="grade" value="<?php echo $arr[0]['grade']?>"></td>-->
<!--	</tr>-->
<!--	<tr>-->
<!--		<td>邮箱</td>-->
<!--		<td><input type="text" name="email" value="<?php echo $arr[0]['email']?>"></td>-->
<!--	</tr>-->
<!--	<tr>-->
<!--		<td>薪水</td>-->
<!--		<td><input type="text" name="salary" value="<?php echo $arr[0]['salary']?>"></td>-->
<!--	</tr>-->
<!--	<input type="hidden" name="flag" value="updateemp">-->
<!--	<tr>-->
<!--		<td><input type="submit" value="修改用户"></td>-->
<!--		<td><input type="reset" value="重新填写"></td>-->
<!--	</tr>-->
<!--	</table>-->
	<table>
	<tr>
		<td>id号</td>
		<td><input type="text" name="id" readonly="readonly" value="<?php echo $emp->getId()?>"></input></td>
	</tr>
	<tr>
		<td>名字</td>
		<td><input type="text" name="name" value="<?php echo $emp->getName()?>"></input></td>
	</tr>
	<tr>
		<td>级别</td>
		<td><input type="text" name="grade" value="<?php echo $emp->getGrade()?>"></input></td>
	</tr>
	<tr>
		<td>邮箱</td>
		<td><input type="text" name="email" value="<?php echo $emp->getEmail()?>"></input></td>
	</tr>
	<tr>
		<td>薪水</td>
		<td><input type="text" name="salary" value="<?php echo $emp->getSalary()?>"></input></td>
	</tr>
	<input type="hidden" name="flag" value="updateemp">
	<tr>
		<td><input type="submit" value="修改用户"></td>
		<td><input type="reset" value="重新填写"></td>
	</tr>
	</table>
</form>
</HTML>