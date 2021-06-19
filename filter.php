
<?php 

$conn=mysqli_connect("localhost","root","","bus_reservation"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap"
    rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- css sheet -->
  <link rel="stylesheet" href="css/ticket.css">
  <link rel="icon" href="">

  <title></title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2">
        <form action="ticket2.php" method="POST">
          <input type="submit" name="submit" value="click for apply filters" class="btn btn-danger"><br>
        <!-- <h5 id="textChange">filters</h5> -->
        <h6 class="text-info text-center">Departure</h6>
        <ul class="list-group">
          <?php

        $home=mysqli_real_escape_string($conn, $_POST['from']);
        $destination=mysqli_real_escape_string($conn, $_POST['to']);
      if (isset($_POST['search'])=='search') {
        $sql = "SELECT  DISTINCT dtime FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `from`='$home' and `to`='$destination' ";
       $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
       while( $record = mysqli_fetch_assoc($resultset) ){
       ?>
        <li class="list-group-item">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="dtime" class="form-check-input common_selector dtime" value="<?php echo $record['dtime']; ?>" id="dtime">
              <h6><?php echo $record['dtime']; ?></h6>
              
            </label>
          </div>
        </li>
       <?php
     }}
       ?>
        </ul>
        <ul>
          <br>
        <h6 class="text-info text-center">Arrival</h6>
        <ul class="list-group">
          <?php
          $home=mysqli_real_escape_string($conn, $_POST['from']);
        $destination=mysqli_real_escape_string($conn, $_POST['to']);
      if (isset($_POST['search'])=='search') { 
         $sql = "SELECT DISTINCT atime FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `from`='$home' and `to`='$destination' ORDER BY atime ";
       $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
       while( $record = mysqli_fetch_assoc($resultset) ){
       ?>
        <li class="list-group-item">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="atime" class="form-check-input common_selector atime" value="<?php echo $record['atime']; ?>" id="atime">
              <h6><?php echo $record['atime']; ?></h6>
              
            </label>
          </div>
        </li>
       <?php
     }}
       ?>
        </ul><br>
        <h6 class="text-info text-center">Bus type</h6>
        <ul>
          <?php
          $home=mysqli_real_escape_string($conn, $_POST['from']);
        $destination=mysqli_real_escape_string($conn, $_POST['to']);
      if (isset($_POST['search'])=='search') { 
       $sql = "SELECT DISTINCT bus_type FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `from`='$home' and `to`='$destination' ORDER BY bus_type "; 
       $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
       while( $record = mysqli_fetch_assoc($resultset) ){
       ?>
        <li class="list-group-item">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="bustype" class="form-check-input filter_check" value="<?php echo $record['bus_type']; ?>" id="bus_type">
              <h6><?php echo $record['bus_type']; ?></h6>
              
            </label>
          </div>
        </li>
       <?php
     }}
       ?>
        </ul>
         <br>
        <h6 class="text-info text-center">Bus Capacity</h6>
        <ul>
          <?php

          $home=mysqli_real_escape_string($conn, $_POST['from']);
        $destination=mysqli_real_escape_string($conn, $_POST['to']);
      if (isset($_POST['search'])=='search') { 
       $sql = "SELECT DISTINCT buscapacity FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `from`='$home' and `to`='$destination' ORDER BY buscapacity ";
       $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
       while( $record = mysqli_fetch_assoc($resultset) ){
       ?>
        <li class="list-group-item">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" name="buscapacity" class="form-check-input filter_check" value="<?php echo $record['buscapacity']; ?>" id="buscapacity">
              <h6><?php echo $record['buscapacity']; ?></h6>
              
            </label>
          </div>
        </li>

       <?php
     }}
       ?>
        </ul>
        <br>
        
      </form>
      </div>
  
</body>
</html>