 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "life_website";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

    date_default_timezone_set('Asia/Bangkok');
?> 

