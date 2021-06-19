<!DOCTYPE html>
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
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="">

    <!-- for counter -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

  <title></title>

  <script type="text/javascript">
    function swap(){
      var f,s;
      f = document.getElementById('first').value;
      s = document.getElementById('second').value;
      document.getElementById('second').value=f;
      document.getElementById('first').value=s;
    }
  </script>
</head>

<body> 

<!------------------navigation bar end------------------------->
<div class="container-fluid">
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

    <div class="collapse navbar-collapse" id="nav_bar">

      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link px-4" href="#">
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

        <li class="nav-item">
          <a class="nav-link px-4" href="#" data-target="#mymodel" data-toggle="modal">
            <i class="fas fa-id-card-alt icon"></i>Sign In</a>
        </li>

        <li class="nav-item" data-target="#mymodal" data-toggle="modal">
          <a class="nav-link px-4" href="#">
            <i class="fas fa-sign-in-alt icon"></i>Sign Up</a>
        </li>

      </ul>

    </div>
  </nav>
</div>


<!---sign in start---->

  <div class="container">
    <div class="modal fade" id="mymodel">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <div class="modal-header">
              <h3 class="text-success text-white">SIGN IN</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <form method="post" action="conn.php">
                <div class="form-group">
                  <label><i class="fa fa-envelope"></i>&nbsp Email</label>
                  <input type="email" required name="email" placeholder="Enter the email" class="form-control">
                </div>

                <div class="form-group">
                  <label><i class="fa fa-lock"></i>&nbsp Password</label>
                  <input type="password" required name="password" placeholder="Enter the password" class="form-control">
                </div>

                <div class="modal-footer justify-content-center">
                <!-- <button class="btn btn-success" data-dismiss="modal">Signin</button> -->
                  <input type="submit" name="sub" value="signin" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>

<!---sign in end---->

<!---sign up start---->

  <div class="container">
      <div class="modal fade" id="mymodal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="text-success text-white">SIGN UP</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <form method="post" action="conn.php" onsubmit="return fun()">
                <div class="form-group">
                  <label><i class="fa fa-user"></i>&nbsp Name</label>
                  <input type="text" id="uname" required name="name" placeholder="Enter the name" class="form-control">
                  <span id="mess" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <label><i class="fa fa-envelope"></i>&nbsp Email</label>
                  <input type="email" required name="email" placeholder="Enter the email" class="form-control">
                </div>

                <div class="form-group">
                  <label><i class="fa fa-lock"></i>&nbsp Password</label>
                  <input type="password" id="pass" required name="password" placeholder="Enter the password" class="form-control">
                  <span id="passwords" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <label><i class="fa fa-lock"></i>&nbsp Confirm Password</label>
                  <input type="password" id="cpass" required name="cpassword" placeholder="Enter the confirm password" class="form-control">
                  <span id="cpwd" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <div class="form-check">
                  <label><!-- <i class="fa fa-circle"></i> -->Gender</label><br>
                  <input type="radio" required="" name="gender" value="male" class="form-check-input">&nbsp Male  
                  </div>

                  <div class="form-check">
                  <input type="radio" required="" name="gender" value="female" class="form-check-input">&nbsp Female
                  </div>

                  <div class="form-check">
                  <input type="radio" required="" name="gender" value="others" class="form-check-input"> &nbsp Others
                  </div>
                  <span id="radio" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <label><i class="fa fa-phone"></i>&nbsp Contact</label>
                  <input type="text" id="mobilenum" required name="contact" placeholder="Enter the contact" class="form-control">
                  <span id="message" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <label><i class="fa fa-street-view"></i>&nbsp Street</label>
                  <input type="text" id="streets" required name="street" placeholder="Enter the street" class="form-control">
                  <span id="str" class="text-danger"></span>
                </div>
                
                <div class="form-group">
                  <label><i class="fa fa-home"></i>&nbsp City</label>
                  <input type="text" id="cities" required name="city" placeholder="Enter the city" class="form-control">
                  <span id="cty" class="text-danger"></span>
                </div>

                <div class="form-group">
                  <label><i class="fa fa-home"></i>&nbsp State</label>
                  <input type="text" id="states" required name="state" placeholder="Enter the state" class="form-control">
                  <span id="ste" class="text-danger"></span>
                </div>

                <div class="modal-footer justify-content-center">
              <!-- <button class="btn btn-success" data-dismiss="modal">Signup</button> -->
              <input type="submit" name="submit" value="sign up" class="btn btn-success">
            </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--------------- sign up end -------------------->

<!------------------navigation bar end------------------------->


  <!-- Search bar -->
  <div class="container" style="margin-top: 100px;">
    <div class="text-center pt-3">
      <h1>Book Bus Tickets</h1>
      
    </div>
    <div class="row">
      
        <div class="col-md-2 " >
          <input type="text" id="first" name="" placeholder="&#xf1ad;From" style="" class="form">

        </div>
        <!-- Two way arrow -->
        <div class="col-md-2 symbol-div mx-3" >
          <!-- <a href="" class="symbol"></a> -->
          <button onclick="swap()">&#8651;</button>
        </div>
        
        
        <div class="col-md-2 " >
          <input type="text" id="second" name="" placeholder="&#xf1ad;To" class="to">
        </div>
        
        <div class="col-md-2 ">
          <input type="date" name="" placeholder="" class="to">
        </div>
        <div class="col-md-2" >
          <button class="button">Search</button>
        </div>
    </div>
  </div>
    
  <!-- offer section-->
  <section id="offer-items" class="py-5">
    <div class="container my-5">
      <div class="row">

        <!------------ offer-item ------------>
        <div class="col-md-4 my-3">
          <div class="item-container">
            <img src="img/specialoffer.jpg" alt="item" class="img-fluid img-thumbnail item-img">
            <a href="img/specialoffer.jpg">
              <h1 class="text-uppercases text-center item-link px-3">OFFER</h1>
            </a>
          </div>
        </div>
        <!--end of offer item-->

        <!--  offer-item-->
        <div class=" col-md-4 my-3">
          <div class="item-container">
            <img src="img/cashback1.jpg"  alt="item" class="img-fluid img-thumbnail item-img">
            <a href="img/cashback1.jpg">
              <h1 class="text-uppercases text-center item-link px-3">OFFER</h1>
            </a>
          </div>
        </div>
        <!--end of offer item-->


        <!--  offer-item-->
        <div class=" col-md-4 my-3">
          <div class="item-container">
            <img src="img/cashback2.jpg"  alt="item" class="img-fluid img-thumbnail item-img">
            <a href="img/cashback2.jpg">
              <h1 class="text-uppercases text-center item-link px-3">OFFER</h1>
            </a>
          </div>
        </div>
        <!--end of offer item-->
    </div>
  </section>
  <!--end of offer section-->

  <!--start Testimonial-->
<div class="container">
  <section class="testimonials">
    <div class="container">
      <h2>Testimonials</h2>
      <p class="text-center">You can Book online reservation from this site</p>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="profile">
            <img src="img/photo1.jpg" class="user">
            <blockquote>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to e Finibus Bonorum et Malorum for use in a type specimen book.
            </blockquote>
            <h3>Bharat kr <span>web developer at xyz</span></h3>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="profile">
            <img src="img/photo3.jpg" class="user">
            <blockquote>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to e Finibus Bonorum et Malorum for use in a type specimen book.
            </blockquote>
            <h3>Aayush D <span>web developer at xyz</span></h3>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="profile">
            <img src="img/photo2.jpg" class="user">
            <blockquote>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to e Finibus Bonorum et Malorum for use in a type specimen book.
            </blockquote>
            <h3>Ritvik G <span>web developer at xyz</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!--End Testimonial-->


  <!-- Bus Tracker -->
  <div class="container-bustrack text-center" style="">
  <div class="container-bustrack text-center">
    <div class="row">
      <div class="col-6" style="padding: 20px;">
        <img class="mx-auto" src="img/bustrack-img.jpg" style="width: 400px;">

      </div>
      <div class="col-6" style="padding: 20px;">
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <p class="mr-5">Ride a Yolo today for a comfortable, on-time, safe ride and experience the next generation inter-city transportation network and mobility platform in your vicinity!</p>
      </div>
    </div>

    <!-- <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 100%;"> -->

     <div class="row my-5">
      <div class="col-6 col-sm-4 counter-section">
        <h5 class="m-4">BUSES</h5>
        <h3 class="m-3 c-section4">250</h3>
        <p>Total buses currently being tracked</p>
      </div>
      <div class="col-6 col-sm-4 counter-section">
        <h5 class="m-4">ROUTES</h5>
        <h3 class="m-3 c-section4">150</h3>
        <p>Total routes currently we are running</p>
      </div>
      <div class="col-6 col-sm-4 counter-section">
        <h5 class="m-4">AGENTS</h5>
        <h3 class="m-3 c-section4">250</h3>
        <p>Total agents with us</p>
      </div>
    </div>
  </div>
</div>
</div>

<!----------------------------->
<?php
include "footer.php";
?>
<!----------------------------->
<script type="text/javascript">
  $(function () {
    function isScrolledIntoView($elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function count($this) {
        var current = parseInt($this.html(), 10);
        if (isScrolledIntoView($this) && !$this.data("isCounting") && current < $this.data('count')) {
            $this.html(++current);
            $this.data("isCounting", true);
            setTimeout(function () {
                $this.data("isCounting", false);
                count($this);
            }, 50);
        }
    }

    $(".c-section4").each(function () {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        $(this).data("isCounting", false);
    });

    function startCount() {
        $(".c-section4").each(function () {
            count($(this));
        });
    };

    $(window).scroll(function () {
        startCount();
    });

    startCount();
});
</script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script>
    function fun(){

      var n = document.getElementById('uname').value;
      var con = document.getElementById('mobilenum').value;
      var pwd = document.getElementById('pass').value;
      var conpwd = document.getElementById('cpass').value;
      // var rad = document.forms.gender;
      var s = document.getElementById('streets').value;
      var c = document.getElementById('cities').value;
      var st = document.getElementById('states').value;


      // for(i=0;i<rad.length;i++){
      //   if(rad[i].checked==true){
      //     return true;
      //   }
      //   else{
      //     document.getElementById("radio"),innerHTML="** please select any one";
      // return false;
      //   }
      // }
      
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
      if(conpwd.length<=5){
        document.getElementById("cpwd").innerHTML = "** please fill the confirm password";
        return false;
      }
      if(pwd!=conpwd){
        document.getElementById("passwords").innerHTML = "** password are not matched";
        return false;
      }
      /*-------------for password field------------*/

      /*-------------for mobile field------------*/
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
      /*-------------for mobile field------------*/

      /*-------------for street field------------*/
      if(s==''){
        document.getElementById('str').innerHTML = "** please enter your street";
        return false;
      }
      if(!isNaN(s)){
        document.getElementById('str').innerHTML = "** only character are allowed";
        return false;
      }
      /*-------------for street field------------*/


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


      /*-------------for state field------------*/
      if(st==''){
        document.getElementById('ste').innerHTML = "** please enter your state name";
        return false;
      }
      if(!isNaN(st)){
        document.getElementById('ste').innerHTML = "** only character are allowed";
        return false;
      }
      /*-------------for state field------------*/
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
