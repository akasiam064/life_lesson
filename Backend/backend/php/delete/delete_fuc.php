<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
session_start();



$connect = mysqli_connect("localhost","root","","life_website");

$uid = $_GET['id'];

$query = "DELETE FROM life_user WHERE id='$uid' LIMIT 1 ";
$result = mysqli_query($connect, $query);

?>