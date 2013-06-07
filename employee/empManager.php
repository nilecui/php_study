<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Frameset//EN">
<HTML>
<HEAD>
<TITLE>管理中心 V1.0</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META http-equiv=Pragma content=no-cache>
<META http-equiv=Cache-Control content=no-cache>
<META http-equiv=Expires content=-1000>
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>

<FRAMESET border=0 frameSpacing=0 rows="60, *" frameBorder=0>
<?php
//    session_start();
    //先写再封装,屏蔽代码后请到common.php中找相关封装函数
//    if(empty($_SESSION['loginuser']))
//    {
//        header("Location:login.php?error=1");
//    }

//    先验证
    require_once("common.php");
    checkUserValid();
    $name=$_SESSION['loginuser'];

	//echo "<FRAME name=header src=header.php?name=".$_GET['name']." frameBorder=0 noResize scrolling=no>";
    echo "<FRAME name=header src=header.php?name=".$name." frameBorder=0 noResize scrolling=no>";
?>

<FRAMESET cols="170, *">
<FRAME name=menu src="menu.htm" frameBorder=0 noResize>
<?php 
	echo "<FRAME name=main src=main.php?name=".$name." frameBorder=0 noResize scrolling=yes";
?>
</FRAMESET>
</FRAMESET>
<noframes>
</noframes>
</HTML>