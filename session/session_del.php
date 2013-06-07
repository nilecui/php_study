<?php 
	echo "<br>***删除session数据***</br>";
	//1.初始化session
	session_start();
	
	//2.删除某个键值对
	//unset($_SESSION['name']);
	
	//3.删除所有	
	session_destroy();//仅删除当前用户(浏览器对应)的session
	
	echo "删除成功！";
?>