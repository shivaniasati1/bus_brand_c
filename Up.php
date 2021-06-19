<?php 
$conn=mysqli_connect("localhost","root","","bus_reservation") or die("could not connect to database");

if(isset($_POST['sub']))
{
 $name=($_POST['name']);
 $password=($_POST['password']);

$q = "SELECT * from agent where name='$name'and password='$password'";
$res=mysqli_query($conn,$q);
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
// echo "<script>window.open('https://www.w3schools.com/','_self')</script>";

header("location:agent_dashboard.php");   // create my-account.php page for redirection 
	
}
else
{
	echo "failed ";
}
}
?>