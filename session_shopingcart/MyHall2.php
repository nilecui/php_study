<?php
	//购物大厅
	echo "<h1>欢迎购买</h1>";
	
	//'".SID"是个什么东西

	session_start();
//	$'".SID"=session_id();

    echo "SID:".SID;
    echo "<br/>";

	echo "<a href='shopprocess1.php?bookid=s1&bookname=天龙八部&".SID."'>天龙八部</a><br/>";
	echo "<a href='shopprocess1.php?bookid=s2&bookname=红楼梦&".SID."'>红楼梦</a><br/>";
	echo "<a href='shopprocess1.php?bookid=s3&bookname=水浒传&".SID."'>水浒传</a><br/>";
	echo "<a href='shopprocess1.php?bookid=s4&bookname=西游记&".SID."'>西游记</a><br/>";
	
	echo "<hr/>";
	echo "<a href='showcart2.php?'".SID."'>查看购买到的商品列表</a>";
?>