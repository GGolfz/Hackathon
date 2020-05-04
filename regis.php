<?php 
session_start();
       			
                  include("connect.php");
                  echo "<script>alert('hi')</script>";
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
                  $Name = $_POST["Firstname"]." ".$_POST["Lastname"];
                  $Tel = $_POST["Tel"];
                  $Email = $_POST["Email"];
                  $CardName = $_POST["CardName"];
                  $CardNo = $_POST["CardNo"];
                  $Expired = $_POST["Expired"];
                  $Pin = $_POST["Pin"];
                  $sql="INSERT INTO user(`username`,`password`,`email`,`tel`,`name`,`credit_name`,`cardno`,`card_expired`,`card_pin`) 
                  VALUES('".$Username."','".$Password."','".$Email."','".$Tel."','".$Name."','".$CardName."','".$CardNo."','".$Expired."','".$Pin."')";

                  if (mysqli_query($con, $sql)) {
                      $_SESSION["Username"] = $Username;
					  $_SESSION["Password"] = $Password;
                      
                        Header("Location: homepage.php");
                        
                        } else {
                        echo "Error updating record: " . mysqli_error($con);
                    }
                 
?>
