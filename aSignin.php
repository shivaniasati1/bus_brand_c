<?php 
$conn=mysqli_connect("localhost","root","","bus_reservation") or die("could not connect to database");
session_start();
if(isset($_POST['sub']))
{
 $email=($_POST['email']);
 $password=($_POST['password']);

$q = "SELECT * from agent where email='$email'and password='$password'";
$res=mysqli_query($conn,$q);
$result=mysqli_fetch_array($res);
if($result)
{

    echo "You are login Successfully ";
    $_SESSION["agentwelcome"]="agentwelcome";
	$_SESSION["agentemail"]=$email;
    header("location:agent_dashboard.php");	
}
else
{
	echo "failed ";
}
}
?>