<?php
session_start();

$con = mysqli_connect('localhost','root','','bus_reservation');

if($_SESSION["welcome"]!="welcome"){
  header("location: index.php");
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
      <strong><a href="index.html">
          Bus Brand
        </a></strong>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_bar" aria-controls="nav_bar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav_bar" style="margin-right: 80px;">
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link px-4" href="htmlboiler.php">
            <i class="fas fa-home icon"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" href="offers.php">
            <i class="fas fa-eject icon"></i>Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" href="printticket.php">
            <i class="fas fa-print icon"></i>Print Ticket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4" href="cancel.php">
            <i class="fas fa-window-close icon"></i>Cancel</a>
        </li>
        <li>
          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            <?php
                      $email=$_SESSION['email'];
                      $q = "SELECT * FROM user_management WHERE email='$email'";
                      $res=mysqli_query($con,$q);
                      $result=mysqli_fetch_array($res);
                      echo $result['name'];
                    
                    ?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="trips.php">My Trip</a></li>
              <li><a class="dropdown-item" href="profile.php"> My Profile</a></li>
              <li><a class="dropdown-item" href="changepwd.php">Change Password</a></li>
              <li><a class="dropdown-item" href="wallet.php">Wallet</a></li>
              <li><a class="dropdown-item" href="cards.php">Cards</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>             
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