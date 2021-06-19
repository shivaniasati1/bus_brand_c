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
  <link rel="icon" href="">

  <title></title>
</head>

<body>
<div class="container">

  <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="bus-brand navbar-brand">
      <strong><a href="index.html">
          Bus Brand
        </a></strong>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_bar" aria-controls="nav_bar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav_bar">
      <ul class="navbar-nav ml-auto nav-flex-icons">

        <li class="nav-item">
          <a class="nav-link px-4" href="#" data-toggle="modal" data-target="#myModale">
            <i class="fas fa-id-card-alt icon"></i>Sign In</a>
        </li>

        <li class="nav-item">
          <a class="nav-link px-4" href="#" data-toggle="modal" data-target="#myModal" >
            <i class="fas fa-sign-in-alt icon"></i>Sign Up</a>
        </li>

        <li class="nav-item">
          <a class="nav-link">
            <i class="fas fa-user"></i>
          </a>
        </li>
      </ul>

    </div>
  </nav>
</div>
         <div class="modal" id="myModal">
          <div class="modal-dialog">
            <form method="POST" action="aSignup.php" onsubmit="return validation()">
            <div class="modal-content">
              <div class="modal-header">
                <h2>Join Seatseller</h2>
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
              </div>
              <div class="modal-body">
                  <div class="input-container">
                    <input type="text" id="uname" name="name" class="form-control" placeholder="Full Name" required>
                    <span id="mess" class="text-danger"></span>
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="form-control" required placeholder="Email">
                  </div>
                  <div class="input-container">
                    <input type="password" id="pass" name="password" class="form-control" placeholder="Password" required>
                    <span id="passwords" class="text-danger"></span>
                  </div>
                  <div class="input-container">
                    <input type="password" id="cpass" name="cpwd" class="form-control" placeholder="confirm Password" required>
                    <span id="passwordss" class="text-danger"></span>
                  </div>
                  <div class="input-container">
                    <input type="text" id="mobilenum" name="contact" class="form-control" required placeholder="Mobile Number">
                    <span id="message" class="text-danger"></span>
                  </div>

                  <div class="input-container">
                    <input type="text" id="org" name="agency" class="form-control" placeholder="agency Name" required>
                    <span id="or" class="text-danger"></span>
                  </div>
                  <div class="input-container">
                    <input type="text" id="cities" name="city" class="form-control" required placeholder="City">
                    <span id="cty" class="text-danger"></span>
                  </div>
                  <div class="input-container">
                    <input type="text" name="pan" class="form-control" required placeholder="PAN NO-">
                  </div>
                  <span>Are You Travel Agent</span><br>
                  <input type="radio" id="yes" name="agent" value="yes">
                   <label for="yes">Yes</label><br>
                  <input type="radio" id="no" name="agent" value="no">
                  <label for="no">No</label><br>
              </div>
              <div class="modal-footer justify-content-center">
                <div class="col-sm-offset-2 col-sm-8" align="center">  
                          <input type="submit" name="submit" id="submit" value="Sign Up" class="btn btn-danger">
                </div>
              </div>
            </div>
            </form>
            
          </div>
          
        </div>
        <div class="modal" id="myModale">
           <div class="modal-dialog">
             <form method="POST" action="aSignin.php">
              <div class="modal-content">
               <div class="modal-header">
                <h2 class="text-primary">Log In</h2>
                  <button type="button" class="close" data-dismiss="modal"> &times;</button>
               </div>
               <div class="modal-body">
                  <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input type="email" name="email" class="form-control" placeholder="email" required>
                  </div>
                  <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                  </div>
        
                  <div class="modal-footer justify-content-center">
                    <div class="col-sm-offset-2 col-sm-8" align="center">  
                      <input type="submit" name="sub" id="submit" value="Sign In" class="btn btn-danger">
                    </div>
              </div>
            </form>
          </div>
        </div>
             
          
        </div>
        </div>
  </div>


  <!--starting body of agent registration-->
  
  <div class="container">
    <div class="cnc" style="background-color: #00cc7a" >
      <h3 class="cncc">
        Be The Agent of Change ! 
      </h3>
      <p class="cnccc" style="color: white; font-size: 20px;">
        Lets make travelling the best experience for people and be happily profitable
      </p>
      <ul class="cncccc">
        <li class="cnccccc">
          <a href="" class="gwt-Anchor" style="color: white; font-size: 16px;"><b>See How To Seat Seller work</b></a>
        </li>
        <li class="cnccccc">
          <a href="" class="gwt-Anchor" style="color: white ; font-size: 16px;"><b>Join Seat Seller Now</b></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
    <div class="col-sm-4">
      <div class="ccn">
        <li class="icc">
        <img src="http://cdn.seatseller.travel/images/ticket_new.png">
        <h4>Live Bus Ticket Booking System.</h4>
        <p>Reliable & fast way of booking an assured seat.</p>
      </li>
        </div>
    </div>
    <div class="col-sm-4">
      <div class="ccn">
        <li class="icc">
        <img src="http://cdn.seatseller.travel/images/root.png">
        <h4>30000 Routes Across India</h4>
        <p>Incomparable reach for revenue generation.</p>
      </li>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="ccn">

        <li class="icc">
        <img src="http://cdn.seatseller.travel/images/hotel_new.png">
        <h4>Bus & Hotel on a Single Platform</h4>
        <p>Great commission from bus & hotel booking.</p>
      </li>
      </div>
    </div>
    
  </div>
</div>
  <!--end of body of agent registration-->

<!---------------------footer------------------------>
<?php
include "footer.php";
?>
<!---------------------footer end------------------------>

<script>
  function validation(){
      var n = document.getElementById('uname').value;
      var pwd = document.getElementById('pass').value;
      var con = document.getElementById("mobilenum").value;
      var o = document.getElementById("org").value;
      var c = document.getElementById('cities').value;

      
      /*-------------for name field------------*/
      
      if(n==''){
        document.getElementById('mess').innerHTML = "** please enter your name";
        return false;
      }
      if(!isNaN(n)){
        document.getElementById('mess').innerHTML = "** only character are allowed";
        return false;
      }
      /*-------------for name field------------*/

      /*-------------for password and conpwd field------------*/
      if(pwd.length<=5){
        document.getElementById("passwords").innerHTML = "** please fill the password";
        return false;
      }
      // if(conpwd.length<=5){
      //   document.getElementById("cpwd").innerHTML = "** please fill the confirm password";
      //   return false;
      // }
      // if(pwd!=conpwd){
      //   document.getElementById("passwords").innerHTML = "** password are not matched";
      //   return false;
      // }
      /*-------------for password field------------*/

       /*-------------for contact field------------*/
      if(con == ''){
        document.getElementById("message").innerHTML = "** please fill the mobile number";
        return false;
      }
      if(isNaN(con)){
        document.getElementById("message").innerHTML = "** only number are allowed";
        return false;
      }
      if(con.length<10){
        document.getElementById("message").innerHTML = "** mobile number must be 10 digit";
        return false;
      }
      if((con.charAt(0)!=9)&&(con.charAt(0)!=8)&&(con.charAt(0)!=7)&&(con.charAt(0)!=6)){
        document.getElementById("message").innerHTML = "** mobile number must be start with 9 , 8 , 7 and 6";
        return false;
      }
       /*-------------for contact field------------*/

       /*-------------for agency field------------*/
      if(o==''){
        document.getElementById('or').innerHTML = "** please enter your orgnization";
        return false;
      }
      if(!isNaN(o)){
        document.getElementById('or').innerHTML = "** only character are allowed";
        return false;
      }
      /*-------------for agency field------------*/

      /*-------------for city field------------*/
      if(c==''){
        document.getElementById('cty').innerHTML = "** please enter your city name";
        return false;
      }
      if(!isNaN(c)){
        document.getElementById('cty').innerHTML = "** only character are allowed";
        return false;
      }
      /*-------------for city field------------*/
  }
</script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
