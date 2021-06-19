<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- fontfamily -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/ec42c28e2a.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/cancel.css">
  <style type="text/css">
.centered {
  display: flex;
  align-items: center;
  justify-content: center;
}
  </style>
</head>
<body >

	<!-------------------header start----------------------->
		<?php
		include "header.php";
		?>
	<!-------------------header start----------------------->

<div class="container">
	<div class="row" style="margin-top: 10%">
		<div class="col-sm-12">
			<h5 class="text-center text-success">PRINT TICKRT</h5>
			<form action="printticket.php" method="POST">
				<div class="form-group centered mt-5">
                     <input  type="date" name="date">
              </div>
                     <input type="submit" name="print" value="Submit" class="btn btn-success">	
			</form>
			
		</div>
	</div>
</div>
<!--------------------footer start----------------------->

<?php
include "footer.php";
?>

<!-------------------footer end------------------------>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>