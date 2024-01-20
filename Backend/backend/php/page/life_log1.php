<?php
	session_start();
	require_once('../config/connection.php');


	if(isset($_REQUEST['Username'])){
        //connection
          include("../page/login.php");
        //รับค่า user & password
          $Username = $_REQUEST['Username'];
          $Password = $_REQUEST['Password'];
        //query 
          $sql="SELECT * FROM life_user Where username='".$Username."' and password='".$Password."' ";

          $result = mysqli_query($con,$sql);
        
          if(mysqli_num_rows($result)==1){

              $row = mysqli_fetch_array($result);

              $_SESSION["UserID"] = $row["id"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
              $_SESSION["Userlevel"] = $row["urole"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า

              if($_SESSION["Userlevel"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                Header("Location: ../backend/backend/index.php");

              }

              if ($_SESSION["Userlevel"]=="user"){  

                Header("Location: ../index.html");

              }

          }else{
            echo "<script>";
                echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                echo "window.history.back()";
            echo "</script>";

          }

}else{


     Header("Location: ../page/login.php"); 

}
?>