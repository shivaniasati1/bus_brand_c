<?php
    require_once("function.php");
    error_reporting(0);
?>



                   <!DOCTYPE html>
                   <html>
                   <head>
                     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


     <!-- <link rel="stylesheet" href="css2/style.css">  -->

                   </head>
                   <body>

                    <?php include('header.php') ?>
<!-- END Header -->

 <!-- Search Form -->
         <!--  <form  method="post" class="text-center  navbar-form-custom">
            <div class="form-group">
              <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
            </div>
          </form> -->
          <!-- END Search Form -->
                     <!-- Page content -->

                    <div id="page-content">
          <!-- Dashboard Header -->

          <div class="content-header">
            <div class="header-section">
              <h1>
                <small>WELCOME TO</small> STAFF MANAGMENT
              </h1>
            </div>
          </div>
          <!-- Search Styles Block -->
          <div class="block">
            <!-- Search Styles Title -->
            <div class="block-title">
              <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active" style="size:10px; "><a href="#search-tab-profile">Staff Members</a></li>
                <li style="size:10px; " ><a href="#search-tab-update">Add Staff Member</a></li>
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
                              <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 79px;"><i class="fa fa-user"></i></th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="staff: activate to sort column ascending" style="width: 99px;">Name</th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 203px;">Email</th>
                              <th class="sorting" tabindex="0" aria-controls="example-datatable" rowspan="1" colspan="1" aria-label="Subscription: activate to sort column ascending" style="width: 191px;">Contact</th>
                              <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 121px;">Actions</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                                $fetchdata = new DB_con();
                                $raw1 = $fetchdata->fetch_staff_data();
                                while($rw=mysqli_fetch_array($raw1))
                                {
                                  $imageURL = 'images/'.$rw["image"];
                                    ?>

                                    <tr role="row" class="odd">
                                            <td class="text-center sorting_1"><?php echo htmlentities($rw['id']);?></td>
                                            <td class="text-center">
                                                <img src="<?php echo $imageURL; ?>" alt="avatar" class="img-circle card-image" style="width:60px;height:60px">
                                            </td>
                                            <td><a href="javascript:void(0)"><?php echo htmlentities($rw['name']);?></a></td>
                                            <td><?php echo htmlentities($rw['email']);?></td>
                                            <td><span class="label text-dark"><?php echo htmlentities($rw['contact']);?></span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="staff_profile.php?id=<?php echo htmlentities($rw['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-default" data-original-title="view"><i class="fa fa-eye"></i></a>
                                                    <a href="delete3.php?id=<?php echo htmlentities($rw['id']); ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                    </tr>

                                    <?php


                                }


                            ?>
                          </tbody>
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


                      <div class="profile-images-card">
  <div class="profile-images">
    <img src="" style="height:200px" id="upload-img">
  </div>
  <div class="custom-file">
    <!-- <label for="fileupload">Upload Profile</label> -->
    <input type="file" id="fileupload" name="file" >
  </div>
</div>





 <script src="js/jquery-latest.min.js"></script>
<script>
  $(function(){
    $("#fileupload").change(function(event) {
      var x = URL.createObjectURL(event.target.files[0]);
      $("#upload-img").attr("src",x);
      console.log(event);
    });
  })
</script>

 </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        <input type="text" id="example-adminname" name="adminname" class="form-control" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-table"></i></span>
                        <input type="text" id="example-position" name="position" class="form-control" placeholder="Position">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="date" id="example-birthdate" name="birthdate" class="form-control" placeholder="Birthdate">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="email" id="example-email" name="pass" class="form-control" placeholder="Password">
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" minlength="10" maxlength="10" id="contact" name="contact" class="form-control" placeholder="Contact Number">

                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" id="street" name="street" class="form-control" placeholder="Street Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" id="city" name="city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" id="state" name="state" class="form-control" placeholder="State">
                      </div>
                    </div>
                    <div class="pl-5">
                      <div class="input-group ">
                      <h4 style="margin-right:5px;">Permissions:-</h4>

                      <!-- <label class="checkbox-inline">
                       <input type="checkbox" value="">Staff
                       </label>
                        -->
                         <label class="checkbox-inline">
                      <input type="checkbox" name="Agent_Managment"  value="1" >Agent Managment
                         </label>
                   <label class="checkbox-inline">
                         <input type="checkbox" name="Route_Management" value="1" >Route Management
                              </label>
                              <label class="checkbox-inline">
                         <input type="checkbox"  name="Bus_Management" value="1">Bus Management
                              </label>
                              <label class="checkbox-inline">
                         <input type="checkbox"  name="Ticket_Bookings" value="1">Ticket Bookings
                              </label>
                              <label class="checkbox-inline">
                         <input type="checkbox" name="User_Managment" value="1">User Managment
                              </label>
                              <label class="checkbox-inline">
                         <input type="checkbox"  name="Offer_Managment" value="1">Offer Managment
                              </label>
                          </div>
                    </div>
                    <div class="form-group form-actions">
                      <button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> ADD</button>
                    </div>
<?php

  $conn=mysqli_connect("localhost","root","","bus_reservation");

        if(isset($_POST['submit']))
        {
          $image=$_POST['image'];
          $name=$_POST['adminname'];
           $email=$_POST['email'];
           $password=$_POST['pass'];
           $birthdate=$_POST['birthdate'];
           $contact=$_POST['contact'];
           $position=$_POST['position'];
           $street=$_POST['street'];
           $city=$_POST['city'];
           $state=$_POST['state'];


         $targetDir = "/xampp/htdocs/abc/images/";
         $fileName = basename($_FILES["file"]["name"]);
         $targetFilePath = $targetDir . $fileName;
         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


$sql="INSERT INTO `staff`(`image`, `name`, `email`, `password`, `birthdate`, `contact`, `position`, `street`, `city`, `state`) VALUES ('$fileName','$name','$email','$password','$birthdate','$contact','$position','$street','$city','$state')";
            $run=mysqli_query($conn,$sql);
            $staffid=mysqli_insert_id($conn);
            $Agent_Managment=$_POST['Agent_Managment']??0;
            $Route_Management=$_POST['Route_Management']??0;
            $Bus_Management=$_POST['Bus_Management']??0;
            $Ticket_Bookings=$_POST['Ticket_Bookings']??0;
            $User_Managment=$_POST['User_Managment']??0;
             $Offer_Managment=$_POST['Offer_Managment']??0;
            $sql1="INSERT INTO `access`(`staff_id`, `A_mg`, `R_mg`, `B_mg`, `T_bookings`, `u_mg`, `offer_mg`) VALUES ( $staffid ,$Agent_Managment ,$Route_Management,$Bus_Management,$Ticket_Bookings,$User_Managment,$Offer_Managment)";
            $run1=mysqli_query($conn,$sql1) or die("query is not running");
            echo "<script>window.location.href = 'staff.php';</script>";
        }
        ?>
        <?php
          $conn=mysqli_connect("localhost","root","","bus_reservation");
        $targetDir = "/xampp/htdocs/abc/images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            echo "dncdmncm";
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
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
