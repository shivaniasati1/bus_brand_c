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

<?php
include "header.php";
?>

<!------------------navigation bar end------------------------->

  <!-- Search bar -->
  <div class="container" style="margin-top: 100px;">
    <div class="text-center pt-3">
      <h1>Book Bus Tickets</h1>  
    </div>
<form action="ticket.php" method="post">
    <div class="row">
      
        <div class="col-md-2 ">
          
          <input type="text" id="first" name="from" placeholder="&#xf1ad;From" class="form" required>

        </div>
        <!-- Two way arrow -->
        <div class="col-md-2 symbol-div mx-3" >
          <input type="button" onclick="swap()" value="&#8651;"></input>
        </div>
        
        
        <div class="col-md-2 " >
          <input type="text" id="second" name="to" placeholder="&#xf1ad;To" class="to" required>
        </div>
        
        <div class="col-md-2 ">
          <input type="date" name="dates" class="to" placeholder="date" required>
        </div>
        <div class="col-md-2" >
          <button class="button" type="submit" name="search" value="search">Search</button>
        </div>    
    </div>
    </form>
  </div>
<div class="container-fluid">
  <!--------------- offer section ------------------->
  <section id="offer-items" class="py-5">
    <div class="container my-5">
      <div class="row">

        <!------------ offer-item ------------>
        <div class="col-md-4 my-3">
          <div class="item-container">
            <img src="img/specialoffer.jpg" alt="item" class="img-fluid">
            <a href="img/specialoffer.jpg">
              <h1 class="text-uppercases text-center item-link px-3">OFFER</h1>
            </a>
          </div>
        </div>
        <!--end of offer item-->

        <!--  offer-item-->
        <div class=" col-md-4 my-3">
          <div class="item-container">
            <img src="img/cashback1.jpg"  alt="item" class="img-fluid">
            <a href="img/cashback1.jpg">
              <h1 class="text-uppercases text-center item-link px-3">OFFER</h1>
            </a>
          </div>
        </div>
        <!--end of offer item-->


        <!--  offer-item-->
        <div class=" col-md-4 my-3">
          <div class="item-container">
            <img src="img/cashback2.jpg"  alt="item" class="img-fluid">
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

<!----------------------footer------------------------>

<?php
include "footer.php";
?>

<!----------------------footer------------------------>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
