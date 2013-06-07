<?php
	require_once 'SqlHelper.class.php';
	
	$sqlHelper=new SqlHelper();
	$arr=$sqlHelper->excute_dql2("select * from emp limit 0,30");
	print_r($arr);
?>