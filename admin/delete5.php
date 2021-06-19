<?php
require_once("function.php");

$delete=new DB_con();
$busid=intval($_GET['busid']);
$sql=$delete->delete5a($busid);
if($sql)
{
	header('location:bus_managment.php');
}



?>