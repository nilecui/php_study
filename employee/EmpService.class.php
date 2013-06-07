<?php

	require_once 'SqlHelper.class.php';
	require_once 'Emp.class.php';
	
	class EmpService{
		//该函数实现获取共有多少页
		function getPagecount($pageSize){
			
			//获取总共多少条,需要查询rowCount
			$sql="select count(id) from emp";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->excute_dql($sql);
			
			//就可以计算pageCount
			if($row=mysql_fetch_row($res)){
				$pageCount=ceil($row[0]/$pageSize);
			}
			//释放资源，关闭连接
			mysql_free_result($res);
			$sqlHelper->close_connect();
			
			return $pageCount;
		}
		
		//可以获取应当显示的雇员信息
		function getEmpListByPage($pageNow,$pageSize)
		{
			$sql="select * from emp limit ".($pageNow-1)*$pageSize.",$pageSize";
			$sqlHelper=new SqlHelper();
			//这里的res就是一个二维数组
			$res=$sqlHelper->excute_dql2($sql);//2自动关闭资源
			
			//释放资源，关闭连接
			//mysql_free_result($res);//能不能马上释放？？？？？
			$sqlHelper->close_connect();
			return $res;
		}
		
		//第二种，使用封装的方式完成分页(业务逻辑在这里)
		function getFenyePage($fenyePage){
			//创建一个SqlHelpre对象实例
			$sqlHelper=new SqlHelper();
			$sql1="select * from emp limit "
			.(($fenyePage->pageNow-1)*$fenyePage->pageSize).",".$fenyePage->pageSize;
			
			$sql2="select count(id) from emp";
			
			$sqlHelper->excute_dql_fenye($sql1, $sql2, $fenyePage);
			$sqlHelper->get_fenye_navigate($fenyePage);
			
			$sqlHelper->close_connect();
		}
		
		//
		function DelEmpById($id){
			//创建一个SqlHelpre对象实例
			$sqlHelper=new SqlHelper();
			$sql="delete from emp where id=".$id;
			
			return $sqlHelper->excute_dml($sql);
			
			$sqlHelper->close_connect();
		}
		
		function getEmpById($id){
			$sql="select * from emp where id=$id";
			//echo $sql;
			$sqlHelper=new SqlHelper();
			$arr=$sqlHelper->excute_dql2($sql);
			//如果更纯度，需要二次封装，先不二次封装
			$sqlHelper->close_connect();
			
			//何时去释放？？？？？？？？？？？？？？？？
			$emp=new Emp();
			$emp->setId($arr[0]['Id']);
			$emp->setName($arr[0]['NAME']);
			$emp->setGrade($arr[0]['grade']);
			$emp->setEmail($arr[0]['email']);
			$emp->setSalary($arr[0]['salary']);
			
			return $emp;
		}
		
	}
?>