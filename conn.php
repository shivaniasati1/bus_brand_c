<?php

$con = mysqli_connect('localhost','root','','bus_reservation');
session_start();
if($con){
	
}else{
	die("connection.failed".mysqli_connect_error());
}


if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$cpassword= $_POST['cpassword'];
	$gender= $_POST['gender'];
	$contact= $_POST['contact'];
	$street= $_POST['street'];
	$city= $_POST['city'];
	$state= $_POST['state'];

    $sql="SELECT * from user_management where email='$email' ";
    $result = mysqli_query($con,$sql);

    if ($result->num_rows == 0)
    {

   $q= "INSERT INTO user_management (name,email,password,cpassword,gender,contact,street,city,state) VALUES('$name','$email','$password','$cpassword','$gender','$contact','$street','$city','$state')";

	$res = mysqli_query($con,$q);

	if($res){
        $_SESSION["welcome"]="notwelcome";
		header("location: index.php");
	}
	else
	{
		echo "failed";
	}
 }
 else
 {
echo "email already registered";
 }
}

if(isset($_POST['sub']))
{

	$email= mysqli_real_escape_string($con,$_POST['email']);
	$password= mysqli_real_escape_string($con,$_POST['password']);
$q = "SELECT * FROM user_management WHERE email='$email' and password='$password' ";

$res=mysqli_query($con,$q);

$result=mysqli_fetch_array($res);

if($result)
{
// echo "You are login Successfully ";
	$_SESSION["welcome"]="welcome";
	$_SESSION["email"]=$email;
header("location: htmlboiler.php");

//header("location:my-account.php");   // create my-account.php page for redirection 
	
}
else
{
	echo "failed ";
}
}

?>