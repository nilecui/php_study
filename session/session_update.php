<?php 
	echo "<br>***更新session数据***</br>";
	//1.初始化session
	session_start();
	
	$_SESSION['name']="崔维铁";
	
	echo "更新成功！";
	
?>