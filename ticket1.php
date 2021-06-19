<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
     <div class="container-fluid">
     	<div class="row">
     		<div class="col-lg-3">
     			
     		</div>
     		<div class="col-lg-9">
     			<?php 
        $conn=mysqli_connect("localhost","root","","bus_reservation");
        
        $home=mysqli_real_escape_string($conn, $_POST['from']);
        $destination=mysqli_real_escape_string($conn, $_POST['to']);
      if (isset($_POST['search'])=='search') {
        $sql = "SELECT * FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `from`='$home' and `to`='$destination' ";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
        if ($resultset->num_rows > 0){         
        while( $record = mysqli_fetch_assoc($resultset) ) {
      ?>

    <div class="container" style="margin-left: 16%;margin-top: 1%;">
      <div class="row">
        <div class="col-sm-12">
          Showing <b>buses</b> from <b><?php echo $record['from']; ?></b> to <b><?php echo $record['to']; ?></b>
        </div>
      </div>
    </div>

    <section class="py-1">
      <div class="container" style="margin-left: 16%;margin-top: 1%;width:150%">
        <blockquote class="blockquote p-2 shadow rounded">
          <div class="row">
          <div class="col-sm-3">
            <div>
              <img src=img/1.jpg width="200" height="100">
            </div>
          </div>
          <div class="col-sm-2 align">
            <i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>
            <p>Departure</p>
            <h5><?php echo $record['dtime']; ?></h5>
          </div>
          <div class="col-sm-2 align">
            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
            <p>Duration</p>
            <h5><?php echo $record['duration']; ?></h5>
          </div>
          <div class="col-sm-2 align">
            <i class="fa fa-arrow-circle-down fa-2x" aria-hidden="true"></i>
            <p>Arrival</p>
            <h5><?php echo $record['atime']; ?></h5>
          </div>
          <div class="col-sm-3 align">
            <h3>&#8377; <?php echo $record['price']; ?></h3>
            <div class="align"><button class="button1"><a href="busseat.php" class="text-white text-decoration-none">Select Seats</a></button></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3 align"><?php echo $record['busagency']; ?></div>
          <div class="col-sm-6 align"><?php echo $record['bus_type']; ?> <?php echo $record['buscapacity']; ?></div>
          <div class="col-sm-3 align"><?php echo $record['available_seats']; ?> Available Seats</div>
        </div>
      </blockquote>
    </div>
  </section>

  <?php } }
  else
  {
    echo "<h2>bus route not available";
  }
 }
 else{
   header("location : htmlboiler.php");
 }
 ?>

     		</div>
     	</div>
     </div>
</body>
</html>