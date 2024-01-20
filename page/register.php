<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/resigter.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="https://img2.pic.in.th/pic/iconfa.png">
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="/index.php">LIFE LESSON</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">LIFE LESSON</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="/index.php">HOME</a></li>
          <li>
            <a href="#">แหล่งรียนรู้</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="/page/book_page.php">หนังสือ</a></li>
              <li><a href="/page/podcat_page.php">พอตแคสต์</a></li>
              <li><a href="/page/blog_page.php">Blog</a></li>
            </ul>
          </li>
          <li>
            <a href="#">ทักษะชีวิต</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="/page/learning.php">สิ่งที่โรงเรียนไม่มีสอน</a></li>
              <li><a href="/page/iqlear.php">บทความจากผู้ประสบความสำเร็จ</a></li>
            </ul>
          </li>
          <li>
            <a href="#">ความช่วยเหลือ</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="/page/social_page.php">โซเชียลมีเดีย</a></li>
              <li><a href="/page/faq.php">คำถามที่พบบ่อย</a></li>
            </ul>
          </li>
          <li><a href="/page/about.php">เกี่ยวกับเรา</a></li>
          <li><a href="/page/login.php">LOGIN</a></li>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="ค้นหา...">
        </div>
      </div>
    </div>
  </nav>
  </div>
    <!------- End Nav ------->

    <section class="lob">
      
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

      <dotlottie-player src="https://lottie.host/4b6ee847-c655-4472-b42e-8a96008a0e35/1hCtFcsVTa.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></dotlottie-player>

      <div class="boxa">
          <form  method="post">

                <h1>สมัครสมาชิก</h1>
                <div class="input-box">
                      <input type="email" placeholder="กรุณาใส่ Email" name="email" required>
                      <i class='bx bx-envelope'></i>
                      
                </div>

                <div class="input-box">
                    <input type="text" placeholder="กรุณาใส่ Username" name="username" required>
                    <i class='bx bx-user'></i>
              </div>

                <div class="input-box">
                      <input type="password" placeholder="กรุณาใส่ Password" name="password" required>
                      <i class='bx bx-lock'></i>
                </div>

                <button type="submit" class="btn" name="signup">สมัครสมาชิก</button>

                   <div class="register-rink">
                       <p><a href="/page/login.php">มีบัญชีแล้ว ?</a></p>
                       <a href="#">ลืมรหัสผ่าน</a>

       </div>
      </form>
    </div>
  </section>
  <script src="/js/search.js"></script>
</body>
</html>


<?php

  //print_r($_POST); //ตรวจสอบมี input อะไรบ้าง และส่งอะไรมาบ้าง 
 //ถ้ามีค่าส่งมาจากฟอร์ม
    if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ){
    // sweet alert 

    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once '../Backend/backend/php/config/connection.php';
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);  
    $urole = 'user'; 

    //check duplicat
      $stmt = $conn->prepare("SELECT id FROM life_user WHERE username = :username");
      //$stmt->bindParam(':username', $username , PDO::PARAM_STR);
      $stmt->execute(array(':username' => $username));
      if($stmt->rowCount() > 0){
          echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Username ซ้ำ !! ",  
                            text: "กรุณาสมัครใหม่อีกครั้ง",
                            type: "warning"
                        }, function() {
                            window.location = "../page/register.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                </script>';
      }else{ //ถ้า username ไม่ซ้ำ เก็บข้อมูลลงตาราง
              //sql insert
              $stmt = $conn->prepare("INSERT INTO life_user (email, username, password, urole)
              VALUES (:email, :username, :password, :urole)");
              $stmt->bindParam(':email', $email, PDO::PARAM_STR);
              $stmt->bindParam(':username', $username , PDO::PARAM_STR);
              $stmt->bindParam(':password', $passwordHashed , PDO::PARAM_STR);
              $stmt->bindParam(':urole', $urole , PDO::PARAM_STR);
              $result = $stmt->execute();
              if($result){
                  echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "สมัครสมาชิกสำเร็จ",
                            text: "กรุณารอระบบ Login ในหน้าต่อไป",
                            type: "success"
                        }, function() {
                            window.location = "login.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              }else{
                 echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "เกิดข้อผิดพลาด",
                            type: "error"
                        }, function() {
                            window.location = "register.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              }
              $conn = null; //close connect db
        } //else chk dup
    } //isset 
    //devbanban.com
    ?>


