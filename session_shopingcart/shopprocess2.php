<?php
	//如果客户端禁用cookie，服务器就不能创建一个新的文件
	if(isset($_GET['phpsessid']))
	{
		session_id($_GET['phpsessid']);
	}

	//接受用户购买请求，get方法，并把书保存到session中
	$bookid=$_GET['bookid'];
	$bookname=$_GET['bookname'];
	
	//保存到session中
	session_start();
	$sid=session_id();
	
	
	//多本书如何处理？暂不处理
	//error: Skipping numeric key 1 in Unknown on line 0
	//$_SESSION[$bookid]=$bookname;
	$_SESSION[$bookid]=$bookname;
	
	echo "<br/>购买商品成功!";
	echo "<br/><a href='MyHall2.php?".SID."'>返回购物大厅</a>";
?>