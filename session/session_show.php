<?php 
	echo "<br>***获取session数据***</br>";
	require_once 'class.php';
	
	//1.初始化session
	session_start();
	
	//2.获取session
	//(1)获取所有session
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	//(2)通过键指定获取
	if (!empty($_SESSION["name"]))
	{
		echo "名字是：".$_SESSION["name"];
	}
	else 
	{
		echo "获取键值为空<br/>";
	}
	
	if (!empty($_SESSION["arr1"]))
	{
		$arr1=$_SESSION["arr1"];		
		foreach ($arr1 as $key=>$val){
			echo "<br/>arr[$key]=$val";
		}
	}
	else
	{
		echo "数组为空<br/>";
	}
	
	//3.取出对象
	//保存对象到session
	if (!empty($_SESSION['dog1']))
	{
		$xiaogou=$_SESSION['dog1'];
		echo "<br/>dog‘s name：".$xiaogou->getName();
	}
	else
	{
		echo "对象为空！";
	}
	
	echo "session_id=".session_id()
	
?>