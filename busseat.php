<?php include"header.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>

  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style type="text/css">
    .seat{
      border: 1px solid;
      width: 45px;
      height: 30px;
      padding: 10px;
      margin: 10px;
      text-align:center;
      border-radius: 10px 0px 0px 10px;
      font-size: 14px;
      margin-left: 10px;
      background: lightgrey;
    }
    .seatbooked{
      border: 1px solid;
      width: 45px;
      height: 30px;
      padding: 10px;
      margin: 10px;
      text-align:center;
      border-radius: 10px 0px 0px 10px;
      font-size: 14px;
      margin-left: 10px;
      background: brown;
    }
    .seatbooking{
      border: 1px solid;
      width: 45px;
      height: 30px;
      padding: 10px;
      margin: 10px;
      text-align:center;
      border-radius: 10px 0px 0px 10px;
      font-size: 14px;
      margin-left: 10px;
      background: pink;
    }
    ul li{
      text-decoration: none;
      display: inline-block;
    }
    .selected{
      width: 25px;
      height: 20px;
      background-color: brown;
    }
    .occupied{
      width: 25px;
      height: 20px;
      background-color: lightgrey;
    }
  </style>


  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

<!--Navigation barbar -->

<!------------------navigation bar end------------------------->
<div class="container-fluid">
  <div class="row mt-5">
        <div class="col-md-12">

          <center>
        <ul class="showcase">

          <li>
            <div class="selected"></div>
          </li>
          <li>
            <p><b>Selected</b></p>
          </li>
          <li style="padding-left:1em">
            <div class=" occupied"></div>
          </li>
          <li>
            <p><b>Availble</b></p>
          </li>
        </ul>
        </center>
        </div>
      </div>
  <div class="row">
   <div class="col-md-12">
    <?php
              $con=mysqli_connect('localhost','root','','bus_reservation');
              if(isset($_POST['selectseat'])){
                $busid=$_POST['busid1'];
                
                $_SESSION['busid']=$busid;
              }
              $busidd=$_SESSION['busid'];

              $sql="select `bus_name` from `bus_management` where `busid`='$busidd'";
              $res=mysqli_query($con,$sql);

            while($result=mysqli_fetch_assoc($res)){
                $seat= $result['bus_name'];
             

            }

              $q="select * from $seat";

              $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));
              ?>
              <div class="card mx-auto" style="width: 42%">
              <div class="container ">
              <div class="row">
              <div class="col-sm-12 d-flex text-align-center">

  
             </div>



                  <?php
              while($result=mysqli_fetch_assoc($res)){
              if($result['status']=='booked'){
                echo "<label class='seatbooked'>".$result['seatno']."</label>";
              }
              else{
                if($result['status']=='booking'){
                  echo "<form method='POST' action='trailserver.php'>";

                  echo "<input class='seatbooking' type='submit' name='submit1' value=' ".$result['seatno']."' id='submit'>";
                  echo "</form>";
                }
                else{
                echo "<form method='POST' action='trailserver.php'>";
                echo "<input class='seat' type='submit' name='submit' value=' ".$result['seatno']."' id='submit'>";
                echo "</form>";
              }
            }
              }
          //   }
          // }
          ?>

          </div>
              </div>
            </div>
            <div class="card mx-auto mt-4 p-3" style="width: 18rem">
              <?php
              $res=mysqli_query($con,$q)or die("data not fetch".mysqli_error($con));

              echo "<form method='POST' action='prebooked.php'>";
              echo "<label style='padding-right:2'> <b>Seatno - </b></label>";
              $total=0;
              $noofseats=0;
              while($result=mysqli_fetch_assoc($res)){

                if($result['status']=='booking'){
                  $noofseats=$noofseats+1;
                  echo "<input type='hidden' value='".$result['seatno']."' name='seatno'";
                  echo "<label>".$result['seatno'];
                  echo ",</label>";
              $amount=$result['amount'];
              $total=$amount+$total;

                }
              }
               $_SESSION['total']=$total;
              echo "<br><b>No. of seats -</b> ";
              echo $noofseats;
              echo "<br>";
              echo "<label'><b>Amount-</b>";
              echo $total;
              echo "<input type='hidden' value='".$total."' name='amount'";
              echo "</label>";
              echo "<br>";
              echo "<input type='submit' class='btn btn-success' value='proceed to book' name='proceed'>";
              echo "</form>";
              ?>
            </div>

  </div>
  </div>
</div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
