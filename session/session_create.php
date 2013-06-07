<?php 
	require_once 'class.php';
	
	echo "<br>***演示如何操作session***</br>";
	
	//1.初始化session
	session_start();
	
	//2.保存数据
	$_SESSION['name']="cuiweitie";
	
	//session文件中可以保存double，integer.....
	$_SESSION['age']=100;
	$_SESSION['isBoy']=true;
	
	//保存数组
	$arr1=array("北京","小明","Hello");
	$_SESSION['arr1']=$arr1;

	//保存对象到session
	$dog1=new Dog("大狗",5,"很可爱");
	$_SESSION['dog1']=$dog1;
	
	echo "保存成功！";
?>