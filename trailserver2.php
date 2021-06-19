<?php
$con=mysqli_connect('localhost','root','','bus_reservation');
session_start();
$busidd=$_SESSION['busid'];

$sql="select `bus_name` from `bus_management` where `busid`='$busidd'";
$res=mysqli_query($con,$sql);

while($result=mysqli_fetch_assoc($res)){
  $seat= $result['bus_name'];
echo $seat;

}

if(isset($_POST['submit']))
{
  $seatno=$_POST['submit'];

  $q="UPDATE `$seat` SET `status`='booking' WHERE `status`='empty' and seatno=$seatno;";
  $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));
}
if(isset($_POST['submit1']))
{
  $seatno=$_POST['submit1'];
  
  $q="UPDATE `$seat` SET `status`='empty' WHERE `status`='booking' and seatno=$seatno;";
  $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));
}

header("location: bussleeper1.php");
?>
