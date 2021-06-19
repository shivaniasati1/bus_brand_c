<!DOCTYPE html>
<html>
<head>
  <title>
    
  </title>
  <style type="text/css">
    table,th,tr,td{
      border: 1px solid black;
      text-align: center;
    }
  </style>
      
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <style type="text/css">
    h1{
      color: red;
    }
    
  </style>
</head>
<body>
  <div class="container " >
  <div class="card mx-auto" style="width:70%;height: auto;margin-top: 8%">
  <div class="card-body">
    <div class="container">
      <?php 
       include"header.php";   
   $conn=mysqli_connect("localhost","root","","bus_reservation");    
            $email=$_SESSION["email"];
            $sql = "SELECT * FROM ticketbooking WHERE 
            email='$email' ";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));  
            if ($resultset->num_rows > 0){         
            while( $record = mysqli_fetch_assoc($resultset) ) {
      ?>
      <table style="width: 100%">
        <tr><th colspan="4" style="background-color:#b3b3ff;color: blue">Booking Details</th></tr>
        <tr><th>From :</th><td><?php echo $record['dtime']; ?></td><th>To : </th><td><?php echo $record['btime']; ?></td></tr>
        <tr><th>Fare:</th><td><?php echo $record['amount']; ?></td><th> Seat No : </th><td><?php echo $record['seatnum']; ?></td></tr>
        <tr><th>Journey Date :</td><td><?php echo $record['jdate']; ?></td><th>Bus Number : </th><td><?php echo $record['busnum']; ?></td></tr>
            <tr><th>Name :</th><td><?php echo $record['name']; ?></td><th> Email id: : </th><td><?php echo $record['email']; ?></td></tr>
            <tr><th colspan="4" >Departure</th></tr>
            <tr><td colspan="4" ><?php echo $record['atime']; ?></td></tr>
            <tr><td colspan="4" style="color: green"><b>Ticket Confirm</b></td></tr>
      </table>
      <p>( please reach your boarding point 15 minutes before the scheduled time )</p>
      <br>
      <table style="width: 100%">
        <tr><th colspan="4" style="background-color:#b3b3ff;color: blue">Important Terms and Conditions</th></tr>
      </table>
      <br>
      <ul>
        <li>
         MyBusTickets.in (MBT) is ONLY an online and Mobile Bus Ticketing agent.
        </li>
        <li>MBT does not own buses or operate bus services that are available on MyBusTickets.in</li>
        <li> Passengers are required to present the following information at the time of boarding the bus:
                A copy of the ticket (A print out of the ticket or the print out of the ticket e-mail or a SMS of the booking confirmation sent by MyBusTickets.in).</li>
            <li>Proof of Identity - (PAN card or Voter ID card, Driving License, Student ID card, Company ID card, Passport). The operator may not allow the passenger to board the bus if the necessary proof of booking is not presented.</li>
      </ul>
      <center><input type="button" name="" class="btn btn-success" value="Download"></center>
       <?php }}
       else{
             echo"<h1>your Ticket is not available</h1>";
       }
     "<br>"     
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