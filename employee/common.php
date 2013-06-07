<?php
	function getLastTime(){
		date_default_timezone_set("Asia/Chongqing");
		if (!empty($_COOKIE['lastVisit'])){
			echo "你上次登录时间是:".$_COOKIE['lastVisit'];
			
			//更新时间
			setCookie("lastVisit",date("Y-m-d H:i:s"),time()+24*3600*30);
		}else{
			//说明第一次登录
			echo "第一次登录";
			setCookie("lastVisit",date("Y-m-d H:i:s"),time()+24*3600*30);
		}
	}
	
	function getCurrentTime(){
		date_default_timezone_set("Asia/Chongqing");
		echo "当前时间是:".date("Y-m-d H:i:s");
	}
	
	function getCookie($key){
		if (empty($_COOKIE[$key]))
		{
			return "";
		}else
		{
			return $_COOKIE[$key];
		}
	}

    //验证用户是否合法
    function checkUserValid(){
        session_start();
        if(empty($_SESSION['loginuser']))
        {
            header("Location:login.php?error=1");
        }
    }
?>