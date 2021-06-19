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
  overflow: hidden;
}

.sidebar a {
  display: block;
  color: black;
  padding: 10px;
  text-decoration: none;
  
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
  height: 800px;
}
.agent_heading{
  border-bottom: 3px solid #00cc7a;
  padding: 10px;
  border-radius:5px 

}
.wallet{
  background-color: #efefef;
}
.balance{
  float: left;
  text-transform: uppercase;
}
.deposit{
  float: right;
  padding: 7px 20px 7px 20px;
  margin: 10px;
  outline: none;
  border-radius: 4px;
  border: 1px solid #00cc7a;
  text-transform: uppercase;
}
.deposit:hover{
  color: white;
  background-color: #00cc7a;
}
.availability{
  color: #948989;
  margin-top: 10px
}
.detail{
  color: white;
  margin: 0 0 30px 75px
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
  .agent_heading{
  border-bottom: 3px solid #00cc7a;
  padding: 10px;
  border-radius:5px ;
  font-size: 30px

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
  .agent_heading{
  border-bottom: 3px solid #00cc7a;
  padding: 10px;
  border-radius:5px ;
  font-size: 25px

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
  <div class="row">
   <div class="col-md-12 wallet">
     <h3 class="balance">Balance</h3>
     <button class="deposit" style="outline: none;"><i class="fas fa-plus" style="letter-spacing: 2px"></i>Deposit</button>
          <button class="deposit" style="outline: none;">Withdraw</button>

   </div>
    
  </div>
  <div class="row wallet" >
    <div class="col-md-12">
      <h6 class="availability">Availability</h6>
      <h1 class="amount">₹ 5000</h1>
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-12 wallet">
      <table class="table table-hover">
       <thead>
        <tr>
          <th>Date</th>
          <th>Price</th><hr>
          <th>Status</th>
          <th>Transaction ID</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>18-DEC-2020</td>
          <td>₹ 2000</td>
          <td>Success / Failed</td>
          <td>abcd1234</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>18-DEC-2020</td>
          <td>₹ 2000</td>
          <td>Success / Failed</td>
          <td>abcd1234</td>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
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
