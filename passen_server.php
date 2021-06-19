
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
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$sid = $_POST['sid'];
	$num = $_POST['num'];
	$terms = $_POST['terms'];


   $q= "INSERT INTO passenger_detail(seatno,amount,pname,gender,age,email,phone,address,selectid,selectno,terms)
VALUES ('$seatno','$amount','$name','$gender','$age','$email','$phone','$address','$sid','$num','$terms')";

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