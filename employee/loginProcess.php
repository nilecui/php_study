<?php
require_once 'AdminService.class.php';

//接收用户数据
//1.用户id
$id = $_POST ['id'];

//2.密码password
$password = $_POST ['password'];


$code=$_POST['code'];


//验证验证码
session_start();
if ($code!=$_SESSION['code'])
{
    header("Location:login.php?error=2");
    exit();
}

//3.获取用户是否选中保存id
if(empty($_POST['keep'])){
	//echo "用户不保存!";
	if (!empty($_COOKIE['id']))
	{
		setcookie("id",$id,time()-100);
	}
}
else
{
	//echo "用户保存!";
	setcookie("id",$id,time()+7*2*24*3600);
}



//实例化一个adminService的方法
$adminService = new AdminService ();
$name=$adminService->checkAdmin ( $id, $password );

if ($name!="") {
	
	//登录信息写入cookie===>loginname:$name;注意：安全性不好
	//数据库：做一个登录表，把登录人的IP地址记录下来；不好

	//合法
//    session_start();
    $_SESSION['loginuser']=$name;

    //有了session不需要传递了
	//header ( "Location:empManager.php?name=$name" );
    header("Location:empManager.php");
	//如果要跳转，最好加上exit()
	exit (); //为什么？结束了
} else {
	//非法
	header ( "Location:login.php?error=1" );
	exit ();
}
?>