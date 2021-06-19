<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<?php
              $con=mysqli_connect('localhost','root','','bus_reservation');             
              $q="select * from seat";
              $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));
              
              while($result=mysqli_fetch_assoc($res)){
                echo $result['seatNo'];
              }
 ?>

</body>
</html>