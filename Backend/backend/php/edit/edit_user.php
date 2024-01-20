<?php

session_start();

  require_once '../config/condb.php';
$uid = $_GET['id'];

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $urole = mysqli_real_escape_string($conn, $_POST['urole']);

    $result = mysqli_query($conn, "SELECT * FROM life_user WHERE username = '$username'") or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 1) {
    header("Location: ../edit/form_user.php?id=$uid");
    exit();
}

$sql = "UPDATE life_user SET
username = '$username',
password = '$password',
email = '$email',
urole = '$urole'
WHERE id = '$uid'
";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($query == true) {
    header("Location: ../page/user.php");
    exit(); // Make sure to exit after setting the header
} else {
    header("Location: ../page/user.php?id='$uid");
    exit();
}


}?>