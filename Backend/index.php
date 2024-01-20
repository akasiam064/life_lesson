
<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="UTF-8">
->
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://img2.pic.in.th/pic/iconfa.png">
   </head>
<body>
  <div class="container">

    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">ยินดีต้อนรับ  เข้าสู่หลังบ้าน</span>
          <span class="text-2">LIFE LESSON</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form form action="" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="username" class="form-control" required minlength="3" placeholder="username">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-control" required minlength="3" placeholder="password">
              </div>
              
              <div class="button input-box">
              <input type="submit" name="login" class="btn btn-info" value="login" /> 
              </div>
            </div>
        </form>
      </div>
      
    </div>


  </div>
</body>
</html>


<?php


    if(isset($_POST['username']) && isset($_POST['password']) ){

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';


    require_once 'connection.php';

    $username = $_POST['username'];
    $password = sha1($_POST['password']); 

      $stmt = $conn->prepare("SELECT id, name, surname FROM life_user WHERE username = :username AND password = :password");
      $stmt->bindParam(':username', $username , PDO::PARAM_STR);
      $stmt->bindParam(':password', $password , PDO::PARAM_STR);
      $stmt->execute();

      
      if($stmt->rowCount() == 1){
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];

       

       

          header('Location: backend/index.php'); 
      }else{ 

         echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "เกิดข้อผิดพลาด",
                             text: "Username หรือ Password ไม่ถูกต้อง ลองใหม่อีกครั้ง",
                            type: "warning"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              $conn = null; 
            } 
    } 
   
    ?>