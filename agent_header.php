<?php
session_start();

$con = mysqli_connect('localhost','root','','bus_reservation');

if($_SESSION["agentwelcome"]!="agentwelcome"){
  header("location: agent.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- css sheet -->
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="">

</head>
<body>

<!----------------- header ------------------->
<!--Navigation barbar -->
<div class="container-fluid">

  <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="bus-brand navbar-brand">
      <strong><a href="agent.php">
          Bus Brand
        </a></strong>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_bar" aria-controls="nav_bar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav_bar" style="margin-right: 80px;">
      <ul class="navbar-nav ml-auto nav-flex-icons">
        
        <li>
          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <?php
                      $email=$_SESSION['agentemail'];
                      $q = "SELECT * FROM agent WHERE email='$email'";
                      $res=mysqli_query($con,$q);
                      $result=mysqli_fetch_array($res);
                      echo $result['name'];
                    
                    ?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="agent_dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item" href="agent_profile.php"> My Profile</a></li>
              <li><a class="dropdown-item" href="agent_route.php">Bus's & Routes</a></li>
              <li><a class="dropdown-item" href="agent_password.php">Change Password</a></li>
              <li><a class="dropdown-item" href="agent_wallet.php">Wallet</a></li>
              <li><a class="dropdown-item" href="agent_logout.php">Logout</a></li>             
            </ul>
        </div>
      </li>
      </ul>

    </div>
  </nav>
</div>

<!------------------navigation bar end------------------------->
  
</body>
</html>