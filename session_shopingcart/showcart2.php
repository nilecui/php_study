<?php
	//如果客户端禁用cookie，服务器就不能创建一个新的文件
	
	if(isset($_GET['phpsessid']))
	{
		session_id($_GET['phpsessid']);
	}

	//1.初始化session
	session_start();
	
	echo "<h1>购物车商品有</h1>";
		
	if (!empty($_SESSION))
	{
		foreach ($_SESSION as $key=>$val)
		{
			echo "<br/> 书号--$key 书名--$val";
		}
	}
	else 
	{
		echo "获取购物车失败！<br/>";
	}
?>