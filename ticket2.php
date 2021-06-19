
<?php $conn=mysqli_connect("localhost","root","","bus_reservation"); 
error_reporting(E_ALL ^ E_WARNING); 

?>

   

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
    <div class="col-sm-12">
      <?php include"header.php";?>
    </div>
  </div>
</div>
<div class="container-fluid">
<div class="col-lg-12">
<div class="row mt-5">
<?php 


if(isset($_POST['submit']))
{
	$dtime=$_POST['dtime'];
	$atime=$_POST['atime'];
	$bustype= $_POST['bustype'];
	$buscapacity= $_POST['buscapacity'];

	$query="SELECT * FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `dtime`=
	'$dtime' OR `atime`='$atime' OR `bus_type`='$bustype' OR `buscapacity`='$buscapacity'";
	$resultset = mysqli_query($conn, $query) or die("database error:". mysqli_error($conn)); 
        if ($resultset->num_rows > 0){         
        while( $record = mysqli_fetch_assoc($resultset) ) {
      ?>
<div class="col-sm-12">
          <center><b>buses</b> from <b><?php echo $record['from']; ?></b> to <b><?php echo $record['to']; ?></b>
          </center>
        </div>
			
<div class="col-sm-12">
<section class="py-1">
      <div class="container-fluid" style="width:100%">
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
</div>
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
</div>
</body>
</html>