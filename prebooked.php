<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset=" utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

  <?php
  include"header.php";
  $con = mysqli_connect('localhost','root','','bus_reservation')or die("not connected");

  //session_start();
  $busidd=$_SESSION['busid'];

  $sql="select `bus_name` from `bus_management` where `busid`='$busidd'";
  $res=mysqli_query($con,$sql);

  while($result=mysqli_fetch_assoc($res)){
    $seat= $result['bus_name'];

  }

  
  ?>
<!--start-->
<div class="container-fluid mt-5 ">
  <div class="row">
            <div class="col-sm-12">
              <h5 align="center" class="text-success">Passenger Deatils</h5>
            </div>
          </div>
  </div>
  <div class="card w-50 mx-auto bg-light">
    <form method="post" action="prebookedserver.php" >
      <div class="card-body">
        <div class="form-group">

          <div class="row">
            <div class="col-sm-6">
              <label><b>Seat Number</b></label><br>
              <?php
       $q="SELECT * FROM $seat WHERE `status`='booking';";
       $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));
       $seatnos=array();
        while($result=mysqli_fetch_assoc($res)){

                if($result['status']=='booking'){
                   array_push($seatnos,$result['seatno']); 

                  echo "<input type='hidden' class='form-control' value='".$result['seatno']."' name='seatnum'";
                  echo "<label>".$result['seatno'];
                  echo ",</label>";

                }
              }
              
              $st= implode(",",$seatnos);
              echo "<input type='hidden' class='form-control' value='".$st."' name='st'>";
     ?>


              <!-- <input type="text" class="form-control" name="seatnum" placeholder="enter seat number"> -->
            </div>
            <div class="col-sm-6">
              <label><b>Amount</b></label><br>
              <input type="hidden" class="form-control" value="<?php echo $_SESSION['total']; ?>" name="amount" placeholder="enter amount">
              <label><?php echo $_SESSION['total']; ?></label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label><b>Name</b></label>
          <input type="text" class="form-control" name="name" placeholder="enter name">
        </div>
        <div class="form-group">
          <label><b>Email</b></label><br>
          <label><?php echo $_SESSION['email']; ?></label>

          <input type="hidden" class="form-control"  value="<?php echo $_SESSION['email']; ?>" name="email" placeholder="enter email">
        </div>
        <div class="form-group">
          <label><b>Contact</b></label>
          <input type="text" class="form-control" name="contact" placeholder="enter contact">
        </div>
        <?php
        $busid1=$_SESSION['busid'];
        $sql = "SELECT * FROM route_management r INNER JOIN bus_management b ON r.routeid = b.busid where busid='$busid1' ";
       $res=mysqli_query($con,$sql)or die("data not fetch".mysqli_error($con));
        while($result=mysqli_fetch_assoc($res)){
          ?>
        <div class="form-group">
          <label><b>bus number</b></label><br>
          <input type="hidden" class="form-control" value="<?php echo $result['bus_number'] ?>" name="busnum" placeholder="enter bus number">
          <label><?php echo $result['bus_number'] ?></label>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-6">
              <label><b>journey date</b></label><br>
              <label><?php echo $result['doj'] ?></label>
              <input type="hidden" class="form-control" name="jdate" value=" <?php echo $result['doj']; ?>"  placeholder="enter journey date">
            </div>
            <div class="col-sm-6">
              <label><b>Departure</b></label><br>
              <label><?php echo $result['dtime'] ?></label>
              <input type="hidden" class="form-control" value=" <?php echo $result['dtime']; ?>"name="atime" placeholder="enter arrival time">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-6">
              <label><b>Boarding point</b></label><br>
              <label><?php echo $result['start_point'] ?></label>
              <input type="hidden" class="form-control" name="dtime" value=" <?php echo $result['start_point']; ?>" >
            </div>
            <div class="col-sm-6">
              <label><b>Droping point</b></label><br>
              <label><?php echo $result['drop_point'] ?></label>
              <input type="hidden" class="form-control" name="btime" value=" <?php echo $result['drop_point']; ?>" >
            </div>
          </div>
        </div>
      </div>
      <?php
        }
        

   ?>
      <div class="card-footer">
        <input type="submit" name="submit" value="submit" class="btn btn-success">
      </div>
    </form>
  </div>
</div>
<!--end-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
