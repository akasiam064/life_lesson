<?php
    require_once('../config/condb.php');

    $Mid = $_GET['id'];

    $sql = "SELECT * FROM life_podcat WHERE id = '$Mid'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if (isset($Mid)) {
        // echo $Mid;
        $sql = "DELETE FROM life_podcat WHERE id = '$Mid'";
        $query = mysqli_query($conn, $sql);
        if($query == TRUE){
            $_SESSION['name'] = $data['name'];
            $_SESSION['Alert'] = 'ลบเมนู '.$data['name']. ' ID: '.$data['id'].' ออกจากระบบแล้ว';
            header('location: ../podcat.php?'.$Mid);
        }else{
            $_SESSION['name'] = $data['name'];
            $_SESSION['Alert'] = 'เกิดข้อผิดพลาด';
            header('location: ../podcat.php?'.$Mid);
        }
        exit();
    }
?>