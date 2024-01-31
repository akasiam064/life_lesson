<?php
session_start();
require_once '../config/condb.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $refer = mysqli_real_escape_string($conn, $_POST['refer']);;
    // $imgNameMain = mysqli_real_escape_string($connect, $_FILES['Img_Name_Main']['name']);
    $imgURLMain = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec1']);
    $imgURLSec1 = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec2']);
    // $imgNameSec1 = mysqli_real_escape_string($connect, $_POST['Image_Name_Sec1']);
    $imgURLSec2 = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec2']);
    // $imgNameSec2 = mysqli_real_escape_string($connect, $_POST['Image_Name_Sec2']);
    $imgURLSec3 = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec4']);   
    // $imgNameSec3 = mysqli_real_escape_string($connect, $_POST['Image_Name_Sec3']);

   echo 'asd';


// Upload Main Image
if (!empty($_FILES['Image_URL_Sec1']['name'])) {
    $imgNameMain = $_FILES['Image_URL_Sec1']['name'];
    $imgTemp = $_FILES['Image_URL_Sec1']['tmp_name'];
    move_uploaded_file($imgTemp, 'img/product/' . $imgNameMain);
} 
echo 'img1';


// Upload Secondary Image 1
if (!empty($_FILES['Image_Name_Sec2']['name'])) {
    $imgNameSec1 = $_FILES['Image_Name_Sec2']['name'];
    $imgTempSec1 = $_FILES['Image_Name_Sec2']['tmp_name'];
    move_uploaded_file($imgTempSec1, 'img/product/' . $imgNameSec1);
} 
echo 'img2';

// elseif (!empty($imgURLSec1)) {
//     // Assuming $imgURLSec1 is a valid URL
//     $imgNameSec1 = basename($imgURLSec1);
//     file_put_contents('Image_Uploaded/' . $imgNameSec1, file_get_contents($imgURLSec1));
// }

// Upload Secondary Image 2
if (!empty($_FILES['Image_Name_Sec3']['name'])) {
    $imgNameSec2 = $_FILES['Image_Name_Sec3']['name'];
    $imgTempSec2 = $_FILES['Image_Name_Sec3']['tmp_name'];
    move_uploaded_file($imgTempSec2, 'img/product/' . $imgNameSec2);
} 
echo 'img3';
    // Assuming $imgURLSec2 is a valid URL
//     $imgNameSec2 = basename($imgURLSec2);
//     file_put_contents('Image_Uploaded/' . $imgNameSec2, file_get_contents($imgURLSec2));
// }

// Upload Secondary Image 3
if (!empty($_FILES['Image_Name_Sec4']['name'])) {
    $imgNameSec3 = $_FILES['Image_Name_Sec4']['name'];
    $imgTempSec3 = $_FILES['Image_Name_Sec4']['tmp_name'];
    move_uploaded_file($imgTempSec3, 'img/product/' . $imgNameSec3);
}
echo 'img4';




    $checkDuplicateQuery = "SELECT * FROM life_blog WHERE name = '$name'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {

        $_SESSION['Alert'] = "ชื่อเมนูนี้มีอยู่ในระบบแล้ว กรุณาเลือกชื่ออื่น";
        header('Location: ../php/create/create_book.php');
        exit();
    } else {

        $sql = "INSERT INTO life_blog (name, detail, refer, Image_URL_Sec1,Image_URL_Sec2,Image_URL_Sec3,Image_URL_Sec4) 
        VALUES ('$name', '$detail', '$refer', '$imgURLMain', '$imgURLSec1', '$imgURLSec2', '$imgURLSec3')";

        if (mysqli_query($conn, $sql)) {
            
            $_SESSION['Up_menuname'] = $name;
            $_SESSION['SWA-ICO'] = 'success';
            $_SESSION['Alert'] = "บันทึกข้อมูลสำเร็จ";
            header('Location: ../create/create_blog.php');
            exit;
        } else {
            $_SESSION['SWA-ICO'] = 'error';
            $_SESSION['Up_menuname'] = $name;
            $_SESSION['Alert'] = "บันทึกข้อมูลผิดพลาดโปรดลองใหม่";
            header('Location: ../create/create_blog.php');
            exit;
        }
    }
}
exit;