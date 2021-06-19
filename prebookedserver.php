<?php
session_start();
$con = mysqli_connect('localhost','root','','bus_reservation')or die("not connected");
  if(isset($_POST['submit']))
  {
    $seatnum = $_POST['st'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $busnum = $_POST['busnum'];
    $jdate = $_POST['jdate'];
    $atime = $_POST['atime'];
    $dtime = $_POST['dtime'];
    $btime = $_POST['btime'];
  
   $busidd=$_SESSION['busid'];

  $sql="select `bus_name` from `bus_management` where `busid`='$busidd'";
  $res2=mysqli_query($con,$sql);

  while($result=mysqli_fetch_assoc($res2)){
    $seat= $result['bus_name'];

  }


  $q = "INSERT INTO ticketbooking(seatnum, amount, name, email, contact, busnum, jdate, atime, dtime, btime) VALUES ('$seatnum','$amount','$name','$email','$contact','$busnum','$jdate','$atime','$dtime','$btime')";
  $q2="SELECT * FROM $seat WHERE `status`='booking';";
       $res=mysqli_query($con,$q2)or die("data not fetch".mysqli_error($con));
        while($result=mysqli_fetch_assoc($res)){

  $q1="UPDATE `$seat` SET `status`='booked' WHERE `status`='booking'";

  $res1=mysqli_query($con,$q1)or die("data not fetch".mysqli_error($con));
}
   $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));
  
  header("location:printticket.php");

  
  }

   ?>