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
                <small>Welcome </small>BUS MANAGMENT
              </h1>
            </div>
          </div>

          <!-- admin profile -->
          <div class="row a-profile">
            <div class="col-lg-8">
              <!-- admin Info Block -->
              <div class="block">
                <!-- admin Info Title
                <div class="block-title">
                  <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>
                 END admin Info Title -->

                <!-- admin Info -->
                <?php 
         
         $fetch1=new DB_con();
         if(isset($_GET['routeid']))
         {
           $routeid=intval($_GET['routeid']);
           $raw2=$fetch1->fetchrecord4a($routeid);
           $run=mysqli_fetch_array($raw2);
         }
         
         ?>

<table class="table table-borderless table-striped table-vcenter">
                  <tbody>
                    <tr>
                        <td class="text-right"><strong>Date Of Journey</strong></td>
                        <td><?php echo htmlentities($run['doj']); ?></td>
                      </tr>
                    <tr>
                     


                      <td class="text-right"><strong>From:</strong></td>
                      <td><?php echo htmlentities($run['from']); ?></td>
                    </tr>

                    <tr>
                        <td class="text-right"><strong>To:</strong></td>
                        <td><?php echo htmlentities($run['to']); ?></td>
                      </tr>
                    <tr>
                     


                      <td class="text-right"><strong>Duration:</strong></td>
                      <td><?php echo htmlentities($run['duration']); ?></td>
                    </tr>
                    
                    
                    <tr>
                    <tr>

                  </tbody>
                </table>
                <!-- END admin Info -->
              </div>
            </div>
          </div>
      <!-- admin profile end -->

        </div>

        <!-- END Page Content -->
<!-- Footer -->
<?php include('footer.php') ?>
</body>
</html>