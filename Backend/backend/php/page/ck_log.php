<?php 
session_start();
        if(isset($_POST['username'])){
        //connection
                  include("../config/connection.php");
        //รับค่า user & password       
                  $username = mysqli_real_escape_string($condb,$_POST['username']);
                  $password = mysqli_real_escape_string($condb,sha1($_POST['password']));
                  $chk = trim($username) OR trim($password);
                  if($chk==''){
                      echo '<script>';
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                      echo '</script>';
                    }//close if chk trim
                    else{
                    //query 
                              $sql="SELECT * FROM life_user 
                              WHERE username='".$username."' 
                              AND password='".$password."' ";
                              $result = mysqli_query($condb,$sql);
                              //echo mysqli_num_rows($result);
                              //exit;
                              if(mysqli_num_rows($result)==1){
                                  $row = mysqli_fetch_array($result);
                                  $_SESSION["id"] = $row["id"];
                                  $_SESSION["name"] = $row["name"];
                                  $_SESSION["urole"] = $row["urole"];
                                  //print_r($_SESSION);
                                  //var_dump($_SESSION);
                                  //exit();
                                  if($_SESSION["urole"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                                    //echo "Are Your Admin";
                                    //exit();
                                    Header("Location: ../backend/backend/index.html");

                                  }
                                  elseif($_SESSION["urole"]=="user"){  

                                    Header("Location: /index.html");
                                  }
                              }else{
                                echo "<script>";
                                    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                                    echo "window.history.back()";
                                echo "</script>";
                              }
                    }//close else chk trim
                    //exit();
        }else{
             Header("Location: ../page/login.php"); //user & password incorrect back to login again
        }
?>