<?php 
session_start();
       			
                  include("connect.php");
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
                  $sql="INSERT INTO user(`username`,`password`) VALUES('".$Username."','".$Password."')";

                  if (mysqli_query($con, $sql)) {
                      $_SESSION["Username"] = $Username;
					  $_SESSION["Password"] = $Password;
                      
                        Header("Location: homepage.php");
                        
                        } else {
                        echo "Error updating record: " . mysqli_error($con);
                    }
                 
?>
