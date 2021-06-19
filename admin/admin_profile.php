<?php
require_once("function.php");
error_reporting(0);
?>

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
        <small>WELCOME</small> Admin
      </h1>
    </div>
  </div>
  <!-- Search Styles Block -->
  <div class="block">
    <!-- Search Styles Title -->
    <div class="block-title">
      <ul class="nav nav-tabs" data-toggle="tabs">
        <li class="active"><a href="#search-tab-profile">Profile</a></li>
        <li><a href="#search-tab-update">Update Profile</a></li>
        <li><a href="#search-tab-password">Update Password</a></li>
      </ul>
    </div>
    <!-- END Search Styles Title -->

    <!-- Search Styles Content -->
    <div class="tab-content">
      <!-- Projects Search -->
      <div class="tab-pane active" id="search-tab-profile">
        <!-- agent profile -->
        <div class="row a-profile">
          <div class="col-lg-8">
            <!-- agent Info Block -->
            <div class="block">
              <!-- agent Info Title
<div class="block-title">
<h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
</div>
END admin Info Title -->
<?php
//if(isset($_POST['upbtn']){
                  $db = new DB_con;
                  $q = "SELECT * FROM admin WHERE id={$_SESSION['id']}";
                  $r = mysqli_query($db->dbh,$q);
                  $d = mysqli_fetch_array($r);
                  //  $imageURL = 'images/'.$row["file_name"];
                   $imageURL = 'images/'.$d['img'];
                   //echo $imageURL;

                  ?>

              <!-- agent Info -->
              <div class="block-section text-center">
                <a href="javascript:void(0)">
<img class="img-fluid profile-image" src="<?php echo $imageURL;  ?>" alt="avatar" class="img-circle">
                </a>
                <h3>
                  <strong><?$d['name']?></strong><br><small></small>
                </h3>
              </div>
              <table class="table table-borderless table-striped table-vcenter ">
                <tbody>
                  <tr>
                    <td class="text-right"><strong>Birthdate</strong></td>
                    <td><?=$d['birthday']?></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Email Id</strong></td>
                    <td><?=$d['email']?></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Contact</strong></td>
                    <td><?=$d['phone']?></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Age</strong></td>
                    <td><?=$d['age']?></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>City</strong></td>
                    <td><?=$d['city']?></td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>State</strong></td>
                    <td><?=$d['state'];?></td>
                  </tr>


                </tbody>

              </table>

              <!-- END agent Info -->
            </div>
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
            <h2><strong>UPDATE</strong> Details</h2>
          </div>
          <!-- END Form Elements Title -->


          <!-- Admin Form Content -->
          <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-bordered " method="post" enctype="multipart/form-data">
            <div class="form-group">


            <div class="profile-images-card">
  <div class="profile-images">
    <img src="images/<?=$d['img']?>" style="height:200px" id="upload-img">
  </div>
  <div class="custom-file">
    <!-- <label for="fileupload">Upload Profile</label> -->
    <input type="file" id="fileupload"  name="file">
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
                <input type="text" id="example-adminname" value="<?=$d['name']?>" name="upname" class="form-control" placeholder="Admin Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="text" id="example-birthdate" value="<?=$d['birthday']?>" name="birthday" class="form-control" placeholder="Birthdate">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="email" id="example-email" value="<?=$d['email']?>" name="upemail" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" id="contact"  value="<?=$d['phone']?> "name="upphone" class="form-control" placeholder="Contact Number">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                <input type="text" id="example-age" name="upage" value="<?=$d['age']?>" class="form-control" placeholder="Age">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" id="street" name="upstreet" class="form-control" placeholder="Street Name">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" id="city" value="<?=$d['city']?>" name="upcity" class="form-control" placeholder="City">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" id="state" value="<?=$d['state']?>" name="upstate" class="form-control" placeholder="State">
              </div>
            </div>
            <div class="form-group form-actions">
              <button type="submit" name="upbtn" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Update</button>
            </div>
          </form>
          <!-- END Admin Form Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
      <!-- END Images Search -->
<?php
if(isset($_POST['upbtn'])){
  $targetDir = "/xampp/htdocs/abc/images/";
$fileName = basename($_FILES["file"]["name"]);

$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  $name=$_POST['upname'];
  $email=$_POST['upemail'];
  $birthdate=$_POST['birthday'];
  $phone=$_POST['upphone'];
  $street=$_POST['upstreet'];
  $age=$_POST['upage'];
  $state=$_POST['upstate'];
  $city=$_POST['upcity'];
  echo $_SESSION['id'];
  $message="update info";
  echo $fileName;
  echo $email;
  echo $birthdate;
  echo $phone;
  echo $age;

        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
              $query="UPDATE `admin` SET `img`='$fileName' WHERE id={$_SESSION['id']} ";
  $r = mysqli_query($db->dbh,$query);
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }

    $query="UPDATE `admin` SET `name`='$name',`email`='$email',`phone`='$phone',`birthday`='$birthdate',`age`=$age,`city`='$city',`state`='$state' WHERE id={$_SESSION['id']}";
    $r = mysqli_query($db->dbh,$query);
    if($r==true){
      echo  "<script type='text/javascript'>alert('update info succesfully');</script>";
    }
}







 ?>
      <!-- Images Search -->
      <div class="tab-pane" id="search-tab-password">



        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>UPDATE</strong> Details</h2>
          </div>
          <!-- END Form Elements Title -->


          <!-- Admin Form Content -->
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-bordered " method="post" enctype="multipart/form-data">


            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="password" name="oldpassword" class="form-control" placeholder="Old Password">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="npassword" name="Newpassword" class="form-control" placeholder="New Password">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password">
              </div>
            </div>
            <div class="form-group form-actions">
              <button type="submit" name="uppass" class="btn btn-sm btn-danger"><i class="fa fa-Update"></i> Update</button>
            </div>
          </form>
          <?php
          if(isset($_POST['uppass'])){
            $old_pass=$_POST['oldpassword'];
            $new_pass=$_POST['Newpassword'];
            $con_pass=$_POST['cpassword'];
              $message1="confirm password is not equal to new password";
            if($con_pass!=$new_pass){
           echo  "<script type='text/javascript'>alert('$message1');</script>";
            }
            else{
              $query="UPDATE `admin` SET `password`='$new_pass',`cpassword`='$con_pass' WHERE `password`='$old_pass'";
                $r = mysqli_query($db->dbh,$query);
                $message="password updated";
                if($r==true)          {
                    echo  "<script type='text/javascript'>alert('$message');</script>";
                }
            }

          }
           ?>
          <!-- END Admin Form Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
      <!-- END Images Search -->

    </div>
    <!-- END Search Styles Content -->
  </div>
  <!-- END Search Styles Block -->


</div>
<!-- END Page Content -->


<!-- Footer -->
<?php include('footer.php') ?>




</body>



</html>
