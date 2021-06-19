<?php

//fetch_data.php

$con = mysqli_connect('localhost','root','','bus_reservation');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM route_management WHERE dtime = '1' AND atime = '1' ";
	
	if(isset($_POST["dtime"]))
	{
		$brand_filter = implode("','", $_POST["dtime"]);
		$query .= "
		 AND dtime IN('".$brand_filter."')
		";
	}
	if(isset($_POST["atime"]))
	{
		$ram_filter = implode("','", $_POST["atime"]);
		$query .= "
		 AND atime IN('".$ram_filter."')
		";
	}
	

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-lg-10">
        <?php 
        
        $home=mysqli_real_escape_string($conn, $_POST['from']);
        $destination=mysqli_real_escape_string($conn, $_POST['to']);
      if (isset($_POST['search'])=='search') {
        $sql = "SELECT * FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where `from`='$home' and `to`='$destination' ";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); 
        if ($resultset->num_rows > 0){         
        while( $record = mysqli_fetch_assoc($resultset) ) {
      ?>

    <div class="container fil">
      <div class="row filter_data">
        <div class="col-sm-12">
          Showing <b>buses</b> from <b>. $record['from'] .</b> to <b>. $record['to'] .</b>
        </div>
      </div>
    </div>

    <section class="py-1">
      <div class="container" style="width:100%">
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
            <h5>. $record['dtime'] .</h5>
          </div>
          
          <div class="col-sm-2 align">
            <i class="fa fa-arrow-circle-down fa-2x" aria-hidden="true"></i>
            <p>Arrival</p>
            <h5>. $record['atime'] .</h5>
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
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>