
<?php

$con = mysqli_connect('localhost','root','','bus_reservation');
if($con){
	
}else{
	die("connection.failed".mysqli_connect_error());
}


if(isset($_POST['submit']))
{   
	$seatno=$_POST['seatno'];
	$amount=$_POST['amount'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$jdate = $_POST['jdate'];
	$atime = $_POST['atime'];
	$dtime = $_POST['dtime'];
	$btime = $_POST['btime'];


   $q= "INSERT INTO ticketbooking(seatno,amount,name,email,contact,jdate,atime,dtime,btime)
VALUES ('$seatno','$amount','$name','$email','$contact','$jdate','$atime','$dtime','$btime')";

	$res = mysqli_query($con,$q);

	if($res){
        echo "successfully";
        
	}
	else
	{
		echo "failed";
	}
 }
?>