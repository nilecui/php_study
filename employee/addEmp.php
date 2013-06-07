<HTML>
<HEAD>
<TITLE>添加用户</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>

<form method="post" action="empProcess.php">
	<table>
	<tr>
		<td>名字</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>级别</td>
		<td><input type="text" name="grade"></td>
	</tr>
	<tr>
		<td>邮箱</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>薪水</td>
		<td><input type="text" name="salary"></td>
	</tr>
	<input type="hidden" name="flag" value="addemp">
	<tr>
		<td><input type="submit" value="添加用户"></td>
		<td><input type="reset" value="重新填写"></td>
	</tr>
	</table>
</form>
</HTML>