<?php
	//购物大厅
	echo "<h1>欢迎购买</h1>";
	
	
	if(isset($_GET['phpsessid']))
	{
		session_id($_GET['phpsessid']);
	}
	
	session_start();
	$sid=session_id();
	
	echo "<a href='shopprocess1.php?bookid=s1&bookname=天龙八部&phpsessid=$sid'>天龙八部</a><br/>";
	echo "<a href='shopprocess1.php?bookid=s2&bookname=红楼梦&phpsessid=$sid'>红楼梦</a><br/>";
	echo "<a href='shopprocess1.php?bookid=s3&bookname=水浒传&phpsessid=$sid'>水浒传</a><br/>";
	echo "<a href='shopprocess1.php?bookid=s4&bookname=西游记&phpsessid=$sid'>西游记</a><br/>";
	
	echo "<hr/>";
	echo "<a href='showcart1.php?phpsessid=$sid'>查看购买到的商品列表</a>";
?>