<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "life_website";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  /** ตรวจสอบข้อผิดพลาดต่างๆ */
  if (mysqli_connect_errno()) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูล MySQL ได้: " . mysqli_connect_error();
    exit();
  }
  date_default_timezone_set('Asia/Bangkok');

?>