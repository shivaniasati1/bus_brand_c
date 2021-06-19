<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php include('header.php') ?>
<!-- END Header -->

<div id="page-content">
  <!-- Dashboard Header -->


  <!-- new section add here -->
  <!-- User Datatables Content -->

  <div id="page-content">
  <!-- Dashboard Header -->

  <div class="content-header">
  <div class="header-section">
  <h1>
  <small>WELCOME TO</small> Route MANAGMENT
  </h1>
  </div>
  </div>
  <!-- Search Styles Block -->
  <div class="block">
  <!-- Search Styles Title -->
  <div class="block-title">
  <ul class="nav nav-tabs" data-toggle="tabs">
  <li class="active" style="size:10px; "><a href="#search-tab-profile">Route Members</a></li>
  <li style="size:10px; " ><a href="#search-tab-update">Add Route Member</a></li>
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

            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="staff: activate to sort column ascending" style="width: 99px;"> DOJ</th>
            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">From</th>
            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">To</th>
            <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Duration</th>
               <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Action</th>

          </tr>
        </thead>
        <tbody>

          <?php
              $fetchdata = new DB_con();
              $raw20 = $fetchdata->fetch_route_data();
              while($rw20=mysqli_fetch_array($raw20))
              {
                  ?>

          <tr role="row" class="odd">
                  <td class="text-center sorting_1"><?php echo htmlentities($rw20['routeid']);?></td>
                    <td class="text-center sorting_1"><?php echo htmlentities($rw20['doj']);?></td>

                  <td><?php echo htmlentities($rw20['from']);?></td>
                  <td><span class="label  "><?php echo htmlentities($rw20['to']);?></span></td>
                  <td><span class="label  "><?php echo htmlentities($rw20['duration']);?></span></td>
                  <td class="text-center">
                                                <div class="btn-group">
          <a href="route_management_details.php?routeid=<?php echo htmlentities($rw20['routeid']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-eye"></i></a>
    <a href="delete6.php?routeid=<?php echo htmlentities($rw20['routeid']);?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
              </tr>
              <?php


      }


  ?>  </tbody>
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
    <div class="input-group">
      <span class="input-group-addon"><i class="gi gi-user"></i></span>
      <input type="date"  name="doj" class="form-control" placeholder="Date of joining">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="gi gi-table"></i></span>
      <input type="text" name="from" class="form-control" placeholder="FROM">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
      <input type="text"  name="to" class="form-control" placeholder="To">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">

      <input type="text"  name="Duration" class="form-control" placeholder="Enter Duration hour">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">

      <input type="text"  name="dtime" class="form-control" placeholder="departure">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">

      <input type="text"  name="atime" class="form-control" placeholder="atime">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">

      <input type="text"  name="price" class="form-control" placeholder="price">
    </div>
  </div>



  <div class="form-group form-actions">
    <button type="submit" name="submit2" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> ADD</button>
  </div>
  <?php

  $conn=mysqli_connect("localhost","root","","bus_reservation");
  //echo $conn;
  if(isset($_POST['submit2']))
  {
  $doj=$_POST['doj'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  $duration=$_POST['Duration'];
  $dtime=$_POST['dtime'];
  $atime=$_POST['atime'];
   $price=$_POST['price'];



  $sql="INSERT INTO `route_management`(`doj`, `from`, `to`,`duration`,`dtime`,`atime`,`price`) VALUES ('$doj','$from','$to','$duration','$dtime','$atime','$price')";
  $run=mysqli_query($conn,$sql);
  $message1="Info update succesfully";
  //header('location:bus_managment.php');
  if($run==true){
      echo  "<script type='text/javascript'>alert('$message1');</script>";
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



























                    <!-- Page content -->


                    <!-- Footer -->
                <?php include('footer.php') ?>


</body>
</html>
