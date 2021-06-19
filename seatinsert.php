                <?php
                session_start();
                   $con = mysqli_connect('localhost','root','','bus_reservation')or die("connection failed".mysqli_error($con));
                   
                   if(isset($_POST['bookTicket'])){
                        $seat = $_POST['seatno'];
                        $amount = $_POST['amount'];
                        $email = $_SESSION['email'];

                        $q = "insert into seat(seatNo,amount,email) values('$seat','$amount','$email')";

                        $res = mysqli_query($con,$q);

                        if($res){
                          echo "data inserted";
                        }
                        else{
                          echo "data not inserted";
                        }
                   }

                   ?>