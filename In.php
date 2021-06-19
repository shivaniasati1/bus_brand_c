<?php
$conn=mysqli_connect("localhost","root","","bus_reservation") or die("could not connect to database");


if(isset($_POST['submit']))
{
 $name=($_POST['name']);
 $email=($_POST['email']);
 $password=($_POST['password']);
 $cpwd=($_POST['cpwd']);
 $contact=($_POST['contact']);
 $agency=($_POST['agency']);
 $city=($_POST['city']);
 $pan=($_POST['pan']);
 $agent=($_POST['agent']);
$sql=" INSERT INTO `agent`(`name`, `email`, `password`,`cpassword`, `contact`, `agency`, `city`, `pan`, `agent`) VALUES 
('$name','$email','$password','$cpwd','$contact','$agency','$city','$pan','$agent')";
if(mysqli_query($conn,$sql))
 echo "record insert succesfully";
 echo"<script>window.open('agent.php','_self')</script>";

}

?> 