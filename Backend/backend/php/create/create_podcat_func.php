<?php
session_start();
require_once '../config/condb.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $refer = mysqli_real_escape_string($conn, $_POST['refer']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);;

    $imgURLSec4 = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec4']);
    // $imgNameSec1 = mysqli_real_escape_string($conn, $_POST['Image_Name_Sec1']);
    $imgURLSec2 = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec2']);
    // $imgNameSec2 = mysqli_real_escape_string($conn, $_POST['Image_Name_Sec2']);
    $imgURLSec3 = mysqli_real_escape_string($conn, $_POST['Image_URL_Sec3']);
    // $imgNameSec3 = mysqli_real_escape_string($conn, $_POST['Image_Name_Sec3']);


    $ytURL = mysqli_real_escape_string($conn, $_POST['YT_URL']);

    echo'in';


// function getUniqueFilename($filename, $dirory) {
//     $fullPath = $dirory . DIRORY_SEPARATOR . $filename;
//ตรวจไฟล์ซ้ำ
//     while (file_exists($fullPath)) {
//         $info = pathinfo($filename);
//         $newFilename = $info['filename'] .' . $info['extension'];
//         $fullPath = $dirory . DIRORY_SEPARATOR . $newFilename;
//         $counter++;
//     }

//     return $newFilename;
// }

// Upload Main Image
if (!empty($_FILES['Img_Name_Main']['name'])) {
    $imgNameMain = $_FILES['Img_Name_Main']['name'];
    $imgTemp = $_FILES['Img_Name_Main']['tmp_name'];
    move_uploaded_file($imgTemp, 'Image_Uploaded/' . $imgNameMain);
} 
// elseif (!empty($imgURLMain)) {
//     // Assuming $imgURLMain is a valid URL
//     $imgNameMain = basename($imgURLMain);
//     file_put_contents('Image_Uploaded/' . $imgNameMain, file_get_contents($imgURLMain));
// }

// Upload Secondary Image 1
if (!empty($_FILES['Image_Name_Sec1']['name'])) {
    $imgNameSec1 = $_FILES['Image_Name_Sec1']['name'];
    $imgTempSec1 = $_FILES['Image_Name_Sec1']['tmp_name'];
    move_uploaded_file($imgTempSec1, 'Image_Uploaded/' . $imgNameSec1);
} 
// elseif (!empty($imgURLSec1)) {
//     // Assuming $imgURLSec1 is a valid URL
//     $imgNameSec1 = basename($imgURLSec1);
//     file_put_contents('Image_Uploaded/' . $imgNameSec1, file_get_contents($imgURLSec1));
// }

// Upload Secondary Image 2
if (!empty($_FILES['Image_Name_Sec2']['name'])) {
    $imgNameSec2 = $_FILES['Image_Name_Sec2']['name'];
    $imgTempSec2 = $_FILES['Image_Name_Sec2']['tmp_name'];
    move_uploaded_file($imgTempSec2, 'Image_Uploaded/' . $imgNameSec2);
} 
// elseif (!empty($imgURLSec2)) {
//     // Assuming $imgURLSec2 is a valid URL
//     $imgNameSec2 = basename($imgURLSec2);
//     file_put_contents('Image_Uploaded/' . $imgNameSec2, file_get_contents($imgURLSec2));
// }

// Upload Secondary Image 3
if (!empty($_FILES['Image_Name_Sec3']['name'])) {
    $imgNameSec3 = $_FILES['Image_Name_Sec3']['name'];
    $imgTempSec3 = $_FILES['Image_Name_Sec3']['tmp_name'];
    move_uploaded_file($imgTempSec3, 'Image_Uploaded/' . $imgNameSec3);
}
//  elseif (!empty($imgURLSec3)) {
//     // Assuming $imgURLSec3 is a valid URL
//     $imgNameSec3 = basename($imgURLSec3);
//     file_put_contents('Image_Uploaded/' . $imgNameSec3, file_get_contents($imgURLSec3));
// }

    // Repeat the above process for other images (Secondary Image 2, Secondary Image 3, etc.) if needed.

    $originalURL = $ytURL;
    // ฟังก์ชันสำหรับแปลง URL เป็น embed URL
function convertToEmbedURL($originalURL) {
    // ในกรณีที่ URL เป็น https://www.youtube.com/watch?v=xxxxxxxxxxx
    if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $originalURL, $matches)) {
        $videoID = $matches[1];
        return "https://www.youtube.com/embed/$videoID";
    } 
    // ในกรณีที่ URL เป็น https://youtu.be/xxxxxxxxxxx
    elseif (preg_match('/youtu\.be\/([^\&\?\/]+)/', $originalURL, $matches)) {
        $videoID = $matches[1];
        return "https://www.youtube.com/embed/$videoID";
    }
    // กรณีไม่ตรงกับรูปแบบที่กำหนด
    else {
        return false;
    }
}

// เรียกใช้ฟังก์ชันแปลง URL เป็น embed URL
    $embedURL = convertToEmbedURL($originalURL);

    $checkDuplicateQuery = "SELECT * FROM life_podcat WHERE name = '$name'";
    $checkDuplicateResult = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($checkDuplicateResult) > 0) {
        // ถ้าพบว่า name ซ้ำ
        $_SESSION['Alert'] = "ชื่อเมนูนี้มีอยู่ในระบบแล้ว กรุณาเลือกชื่ออื่น";
        header('Location: ../create/create_podcat.php');
        exit();
    } else {
        // ถ้า name ไม่ซ้ำ
        $sql = "INSERT INTO life_podcat (name, refer, detail,  Image_URL_Sec4, Image_URL_Sec2, Image_URL_Sec3,  YT_URL) 
        VALUES ('$name', '$refer', '$detail', '$imgURLSec4', '$imgURLSec2', '$imgURLSec3',  '$embedURL')";

        if (mysqli_query($conn, $sql)) {
            
            $_SESSION['Up_menuname'] = $name;
            $_SESSION['SWA-ICO'] = 'success';
            $_SESSION['Alert'] = "บันทึกข้อมูลสำเร็จ";
            header('Location: ../create/create_podcat.php');
            exit;
        } else {
            $_SESSION['SWA-ICO'] = 'error';
            $_SESSION['Up_menuname'] = $name;
            $_SESSION['Alert'] = "บันทึกข้อมูลผิดพลาดโปรดลองใหม่";
            header('Location: ../create/create_podcat.php');
            exit;
        }
    }
}
exit;