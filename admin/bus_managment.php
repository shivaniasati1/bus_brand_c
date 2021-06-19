<?php
    require_once("function.php");
    error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <?php include('header.php') ?>
<!-- END Header -->

        <!-- Page content -->
        <div id="page-content">
          <!-- Dashboard Header -->

          <div class="content-header">
            <div class="header-section">
              <h1>
            <!-- <i class="fa fa-table"></i> -->
                <small>Welcome </small>BUS MANAGMENT
              </h1>
            </div>
          </div>
          <!-- new section add here -->
          <!-- User Datatables Content -->


          <!-- Search Styles Block -->
          <div class="block">
          <!-- Search Styles Title -->
          <div class="block-title">
          <ul class="nav nav-tabs" data-toggle="tabs">
          <li class="active" style="size:10px; "><a href="#search-tab-profile">Bus Members</a></li>
          <li style="size:10px; " ><a href="#search-tab-update">Add Bus Member</a></li>
          </ul>
          </div>
          <!-- END Search Styles Title -->

          <!-- Search Styles Content -->
          <div class="tab-content">
          <!-- Projects Search -->
          <div class="tab-pane active" id="search-tab-profile">
          <!-- agent profile -->
          <div class="row a-profile">
          <div class="col">
          <div class="table-responsive">
            <div id="example-datatable_wrapper" class="dataTables_wrapper form-inline no-footer">

              <table id="example-datatable" class="table table-vcenter table-condensed table-bordered dataTable no-footer" role="grid" aria-describedby="example-datatable_info">
                <thead>
                  <tr role="row">
                    <th class="text-center sorting_asc" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 51px;">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="staff: activate to sort column ascending" style="width: 99px;"> Agency Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">Bus Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Bus Number</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Bus Type</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Total seats</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Amount Per Seat</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Route</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Strat Point</th>
                    <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Drop Point</th>
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
          header('location:bus_managment.php');
              $fetchdata = new DB_con();
              $raw1 = $fetchdata->fetchdata4();
              while($rw=mysqli_fetch_array($raw1))
              {
                  ?>
                <tr role="row" class="odd">
                          <td class="text-center sorting_1"><?php echo htmlentities($rw['busid']);?></td>
                          <!-- <td class="text-center"><img src="img/placeholders/avatars/avatar15.jpg" alt="avatar" class="img-circle"></td> -->
                          <td style="text-align:center"><a href="javascript:void(0)" ><?php echo htmlentities($rw['busagency']);?></a></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['bus_name']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['bus_number']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['bus_type']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['total_seats']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['amount']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['route']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['start_point']);?></td>
                          <td style="text-align:center"><?php echo htmlentities($rw['drop_point']);?>

                          </td>

                          <td class="text-center">
                                                 <div class="btn-group">
          <a href="bus_managment_details.php?busid=<?php echo htmlentities($rw['busid']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-eye"></i></a>
    <a href="delete5.php?busid=<?php echo htmlentities($rw['busid']);?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>



                      </tr>

                    <?php }?>        </tbody>
              </table>
            </div>
          </div>
          <!-- End staff Datatable -->
          </div>
          </div>
          <!-- agent profile end -->
          </div>
          <!-- END Projects Search -->

          <!-- Images Search -->
          <div class="tab-pane" id="search-tab-update">
          <!-- Basic Form Elements Block -->
          <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
          <h2><strong>Staff</strong> Details</h2>
          </div>
          <!-- END Form Elements Title -->


          <!-- Admin Form Content -->
          <form  class="form-bordered " action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">









          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="agency" class="form-control" placeholder="Bus agency">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text" name="busname" class="form-control" placeholder="Bus Name">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="busno" class="form-control" placeholder="Bus No">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="bustype" class="form-control" placeholder="Bus Type">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="buscapacity" class="form-control" placeholder="Bus capacity">
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="totalseats" class="form-control" placeholder="totalseats">
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">

              <input type="text"   name="amount" class="form-control" placeholder="Amount">

            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"   name="route" class="form-control" placeholder="Route">

            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="startpoint" class="form-control" placeholder="Start Point">

            </div>
          </div>
          <div class="form-group">
            <div class="input-group">

              <input type="text"  name="droppoint" class="form-control" placeholder="Drop Point">

            </div>
          </div>

          <div class="form-group form-actions">
            <button type="submit" name="submit1" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> ADD</button>
          </div>
          <?php

          $conn=mysqli_connect("localhost","root","","bus_reservation");
          //echo $conn;
          if(isset($_POST['submit1']))
          {
          $agency=$_POST['agency'];
          $busname=$_POST['busname'];
          $busno=$_POST['busno'];
          $bustype=$_POST['bustype'];
          $buscapacity=$_POST['buscapacity'];
          $totalseat=$_POST['totalseats'];
          $amount=$_POST['amount'];
          $route=$_POST['route'];
          $startpoint=$_POST['startpoint'];
          $droppoint=$_POST['droppoint'];
          echo $agency;
          echo $busname;
          echo $amount;


          $targetDir = "/xampp/htdocs/abc/images/";
          $fileName = basename($_FILES["file"]["name"]);
          $targetFilePath = $targetDir . $fileName;
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


          $sql="INSERT INTO `bus_management`( `busagency`, `bus_name`, `bus_number`, `bus_type`,
            `buscapacity`,`total_seats`, `amount`, `route`, `start_point`, `drop_point`) VALUES ('$agency','$busname','$busno','$bustype','$buscapacity','$totalseat','$amount','$route','$startpoint','$droppoint')";
          $run=mysqli_query($conn,$sql);
          $message1="Info update succesfully";
          //header('location:bus_managment.php');
          if($run==true){
            $conn = mysqli_connect('localhost','root','','bus_reservation');
if(! $conn )
{
 die('Could not connect: ' . mysqli_error($conn));
}
echo 'Connected successfully to MySQL <br />';

$sql = "CREATE TABLE `$busname`( ".
 "id INT NOT NULL AUTO_INCREMENT, ".
 "seatno VARCHAR(100) NOT NULL, ".
 "amount VARCHAR(40) NOT NULL, ".
 "status  VARCHAR(40) NOT NULL, ".
 "PRIMARY KEY ( id )); ";

 //define your existing database name here.
$retval = mysqli_query($conn, $sql );

if(! $retval )
{
 die('Could not create table: ');
}
else{
  for($i=1;$i<=$totalseat;$i++){
    $sql="INSERT INTO `$busname`( `seatno`, `amount`, `status`) VALUES('$i','$amount','empty')";
    $re = mysqli_query($conn, $sql );
  }


echo  "<script type='text/javascript'>alert('$message1');</script>";
}


      }
    }
          ?>

          </form>
          <!-- END Admin Form Content -->
          </div>
          <!-- END Basic Form Elements Block -->
          </div>
          <!-- END Images Search -->

          </div>
          <!-- END Images Search -->

          </div>
          <!-- END Search Styles Content -->
          </div>













































        <!-- END Page Content -->

        <!-- Footer -->
    <?php include('footer.php') ?>


</body>
</html>
