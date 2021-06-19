<?php
include "agent_header.php"
?>
<html lang="en">

<head>
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
  <link rel="stylesheet" href="css/agent.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="">

  <title></title>

<style>
body {
  margin: 0;
  /*font-family: "Lato", sans-serif;*/
}

.sidebar {
  margin: 0;
  padding: 0;
  padding-top: 6%;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 10px;
  text-decoration: none;
  background-color: 
}
 
.sidebar a.active {
  background-color: #00cc7a;
  /*color: white;*/
}

.sidebar a:hover:not(.active) {
  background-color: #00cc7a;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 100px 160px;
  height: 1000px;
}

.agent_image{
  border-radius: 100px;
  width: 50%;
  height: 200px;
  align-items: center;
  justify-content: center;
  padding: 10px 10px 10px 10px;
  margin: 10px 10px 10px 100px;
  }
  .agent_name{
    text-align: center;
    padding: 20px 10px 10px 0px;
  }
  .certified{
    float: right;display: block;border: 1px solid grey;background-color: lightgrey;font-size: 13px;border-radius: 3px;padding: 2px;margin-top: 5px
  }
  .icon_promo1 , .icon_promo2, .icon_promo3, .icon_promo4 {

  }
  .icon_promo1:hover{
    color: blue
  }
  .icon_promo2:hover{
    color: red
  }
  .icon_promo3:hover{
    color: blue
  }
  .icon_promo4:hover{
    color: red
  }
  .design{
    border-right: 1px solid lightgrey
  }
  /*------Footer-----------*/
.heading{
  color: white;
  margin: 10% 0 20px 0;
  padding: 10px 0 20px 0;
  font-size: 25px

}
.company_detail{
  color: white
}

.social_icon:hover{
  color:#00cc7a;
}
.break_tag{
  border: 2px solid #00cc7a;
  margin: 20px 0 0 0 ;
  padding: 0;
  width: 50%;
  border-radius: 10px
}
.list:hover{
  color: #00cc7a
}


@media screen and (max-width: 800px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    padding-top: 100px;
    display: block;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}

  div.content {
  /*margin-left: 20px;*/
  padding: 50px 50px;
  height: 1000px;
}
.agent_image{
  border-radius: 100px;
  width: 50%;
  height: 200px;
  align-items: center;
  justify-content: center;
  padding: 10px 10px 10px 10px;
  margin: 10px 10px 10px 50px;
  }
.agent_name{
    text-align: center;
    padding: 20px 10px 10px 0px;
    margin: 20px 10px 10px 0px;  
  }
  .certified{
    float: left;
  }
  .design{
    border-bottom: 1px solid lightgrey;
    border-right:0px;
  }

  
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
    padding-top: 400px;
    display: block;
  }
  div.content {
  /*margin-left: 20px;*/
  padding: 50px 50px;
  height: 1000px;
}
.agent_image{
  border-radius: 100px;
  width: 70%;
  height: 200px;
  align-items: center;
  justify-content: center;
  padding: 10px 10px 10px 10px;
  margin: 10px 10px 10px 100px;
  }
.agent_name{
    text-align: center;
    padding: 20px 10px 10px 0px;
    margin: 20px 10px 10px 0px;
  }
  .design{
    border-bottom: 1px solid lightgrey
  }

}
@media screen and (max-width: 399px) {
  .sidebar a {
    text-align: center;
    float: none;
    padding-top: 20px;
    display: block;
    margin: 0;
  }
  .agent_image{
  border-radius: 100px;
  width: 70%;
  height: 200px;
  align-items: center;
  justify-content: center;
  padding: 10px 10px 10px 10px;
  margin: 10px 10px 10px 30px;
  }

}
</style>
</head>

<body>

<div class="sidebar bg-light">
  <!-- <hr style="padding: 0;margin: 0;"> -->

  <a class="active" href="agent_dashboard.php" style="text-transform: uppercase;border-bottom: 1px solid #00cc7a;font-size: 15px"><i class="fas fa-columns " style="margin-right: 5px;color: black"></i> Dashboard</a>
  <!-- <hr style="padding: 0;margin: 0;"> -->

  <a href="agent_profile.php" style="text-transform: uppercase;border-bottom: 1px solid #00cc7a;font-size: 15px "><i class="fas fa-user " style="margin-right: 5px;color: black"></i>My Profile</a>
  <!-- <hr style="padding-top: 0;margin: 0;"> -->

  <a href="#" style="text-transform: uppercase;border-bottom: 1px solid #00cc7a;font-size: 15px "><i class="fas fa-bus " style="margin-right: 5px;color: black"></i>Bus's & Routes</a>
  <!-- <hr style="padding-top: 0;margin: 0;"> -->

  <a href="agent_password.php" style="text-transform: uppercase;border-bottom: 1px solid #00cc7a;font-size: 15px "><i class="fas fa-unlock-alt " style="margin-right: 5px;color: black"></i>Change Password</a>
  <!-- <hr style="padding-top: 0;margin: 0;"> -->

  <a href="agent_wallet.php" style="text-transform: uppercase;border-bottom: 1px solid #00cc7a;font-size: 15px "><i class="fas fa-wallet " style="margin-right: 5px;color: black"></i>Wallet</a>
  <!-- <hr style="padding-top: 0;margin: 0;"> -->

  <a href="agent_logout.php" style="text-transform: uppercase;border-bottom: 1px solid #00cc7a;font-size: 15px "><i class="fas fa-sign-out-alt " style="margin-right: 5px;color: black"></i>Log Out</a>
  <!-- <hr style="padding-top: 0;margin: 0;"> -->

</div>

<div class="content">
 <?php
$con = mysqli_connect('localhost','root','','bus_reservation');
$_SESSION["agentemail"]=$email;

$sql= "SELECT * FROM agent where email='$email' ";
$res = mysqli_query($con,$sql)or die("data not fetch" . mysqli_error($con));

if($res->num_rows == 1){
    
 
while($result=mysqli_fetch_assoc($res)){

?>

  <div class="row">
    <div class="col-md-6" style="overflow: hidden;" >
      <img src="img/photo1.jpg" class="agent_image">
    </div>
    <div class="col-md-6">
      <h3 class="agent_name"><?php echo $result['name']; ?> <i class="fas fa-check-circle " style="color: #00cc7a"></i></h3>
      <br>
      <p class="Certified" style="cursor: pointer;;cursor: pointer;">Certified Agent</p>
      <br>
      <p class="" style="float: left;">Founder and CEO at NewSpot Boston, MA, United States</p>
      <br>
      <div class="" style="float: left;">
        <i class="fab fa-facebook icon_promo1" style="font-size: 1.5em;cursor: pointer;"></i>
        <i class="fab fa-instagram icon_promo2" style="padding: 5px;font-size: 1.5em;cursor: pointer;"></i>
        <i class="fab fa-twitter icon_promo3" style="padding: 5px;font-size: 1.5em;cursor: pointer;"></i>
        <i class="fab fa-pinterest icon_promo4" style="padding: 2px;font-size: 1.5em;cursor: pointer;"></i>
      </div><br>
      <div class="col" style="float: left;margin: 15px 0 0 0;color: #00cc7a">
        <div class="row">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        </div>
      </div>
    </div>
  </div><hr><br>

  <div class="row">
    <div class="col-md-6"> 
      <h4 class="agent_bio">Professional Bio<hr style="width: 50%;margin:10px 0 0 0;"></h4>
      <br>
      <p class="agent_bio_detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
    </div>
    <div class="col-md-6">
      <h4 class="agent_bio">Detail<hr style="width: 50%;margin:10px 0 0 0;"></h4><br>
      <div class="row">
        <div class="col-md-4 design">
          <h5>Total Bus</h5>
          <p>50</p>
        </div>
        <div class="col-md-4 design">
          <h5>Total Routes</h5>
          <p>100</p>
        </div>
        <div class="col-md-4 design"> 
          <h5>Wallet</h5>
          <p>5000 ₹</p>
        </div>
        
      </div>
    </div>
    
  </div>
  <?php } }?>
</div>

<!---------------------footer start------------------------>

<footer  style="background-color: #212529;position: relative;overflow: hidden;">
  <div>
    <div class="row" style="padding: 50px 100px 50px 100px">
      <div class="col-md-3">
        <h3 class="heading" style="">Company Name<hr class="break_tag"></h3>
        <p class="company_detail" style="float: left;">Ride a Yolo today for a comfortable, on-time, safe ride and experience the next generation inter-city transportation network and mobility platform in your vicinity!</p>
      </div>
      <div class="col-md-3">
        <h3 class="heading col-md-12">Quick Links<hr class="break_tag"></h3>
        <div style="">
          <ul style="color: white;list-style: none;padding: 0;margin: 0">
            <li class="list" style="padding: 5px;cursor: pointer;">About Us</li>
            <li class="list" style="padding: 5px;cursor: pointer;">Bus Ticket</li>
            <li class="list" style="padding: 5px;cursor: pointer;">Contact Us</li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="heading col-md-12">Information<hr class="break_tag"></h3>
        <div style="">
          <ul style="color: white;list-style: none;padding: 0;margin: 0">
            <li class="list" style="padding: 5px;cursor: pointer;">Terms & Conditions</li>
            <li class="list" style="padding: 5px;cursor: pointer;">Privacy Policyt</li>
            <li class="list" style="padding: 5px;cursor: pointer;">Agent Registration</li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h3 class="heading col-md-12">Get in Touch !<hr class="break_tag"></h3>
        <div style="color: white">
           <p><i class="fas fa-home mr-3"></i> Bangalore, India</p>
           <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
           <p><i class="fas fa-phone mr-3"></i>+91 7987987956</p>
        </div>
         <div class="col-lg-8 text-center text-md-right" style="color: white; ">

          <!-- Facebook -->
         <i class="fab fa-facebook-square social_icon" style="padding: 5px ;font-size: 18px;margin: 0;cursor: pointer;"></i>
          <!-- Twitter -->
          <i class="fab fa-twitter-square social_icon" style="padding: 5px;font-size: 18px;margin: 0;cursor: pointer;"></i>
          <!-- Google +-->
          <i class="fab fa-google-plus-square social_icon" style="padding: 5px;font-size: 18px;margin: 0;cursor: pointer;"></i>
          <!--Linkedin -->
          <i class="fab fa-linkedin social_icon" style="padding: 5px;font-size: 18px;margin: 0;cursor: pointer;"></i>
          <!--Instagram-->
          <i class="fab fa-instagram-square social_icon" style="padding: 5px;font-size: 18px;margin: 0;cursor: pointer;"></i>

        </div>

      </div>
    </div><hr style="border:1px solid #444444">
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <p class="text-center" style="color: white">Copyright &copy;

            All rights reserved |
           <i class="fa fa-heart-o" aria-hidden="true"></i> by
            <a href=" " target="_blank">Bus Brand</a></p>
        </div>
      </div>
    </div>

</footer>

<!---------------------footer end------------------------>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<?php

?>
</body>

</html>
