<?php 
session_start();
        if(isset($_POST['Username'])){				
                  include("connect.php");
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
                  $sql="SELECT * FROM Account Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["Username"] = $row["Username"];
					  $_SESSION["Password"] = $row["Password"];
                      Header("Location: homepage.php");
                  }
                  else{
                    echo "<script>";
                        echo "alert(\" Username หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: index.php");

        }
?>
