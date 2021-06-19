<?php
require_once("function.php");

$delete=new DB_con();
$routeid=intval($_GET['routeid']);
$sql=$delete->delete6a($routeid);
if($sql)
{
	header('location:route_management.php');
}



?>