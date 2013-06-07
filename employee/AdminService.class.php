<?php

require_once 'SqlHelper.class.php';
error_reporting(E_ERROR);
//该类是业务逻辑处理类，主要完成对admin表的业务逻辑操作
class AdminService {
	//提供一个验证用户是否合法的方法
	public function checkAdmin($id, $password) {
		$sql = "select password,name from admin where id=$id";
		//调用数据库工具类
		//创建一个SqlHelper对象
		$sqlHelper = new SqlHelper ();
		$res = $sqlHelper->excute_dql( $sql );
		echo "res=".$res;
		
		$row = mysql_fetch_assoc ( $res );
		echo "row=".$row;
		
		if ($row) {
			echo "password=".$password;
			if (md5 ( $password ) == $row ['password']) {
				return $row ['name'];
			}
		}
		
		echo "error";
		
		//释放资源
		mysql_free_result ( $res );
		//关闭连接
		$sqlHelper->close_connect ();
		
		//return false;
		return "";
	}
}

//$adminService=new AdminService();
//$adminService->checkAdmin("100", "admin");

?>