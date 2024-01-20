<?php


    require_once('../page/config.php'); /*=== ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งานผ่านโฟลเดอร์ php ===*/
    /**
     * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
     */
    if (isset($_POST['submit'])) { 
        /**
         * กำหนดตัวแปรเพื่อมารับค่า
         * ฟังก์ชัน real_escape_string()
         * ใช้สำหรับเลี่ยงการใช้ตัวอักขระพิเศษในคำสั่ง sql เช่น เครื่องหมาย " เครื่องหมาย '
         */
        $username =  $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        /**
         * สร้างตัวแปร $sql เพื่อเก็บคำสั่ง Sql
         * จากนั้นให้ใช้คำสั่ง $conn->query($sql) เพื่อที่จะประมวณผลการทำงานของคำสั่ง sql
         */
        $sql = "SELECT * FROM `life_user` WHERE `username` = '".$username."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        /**
         * ตรวจสอบการเข้าสู่ระบบ
         */
        if(!empty($row)){
            if(password_verify($password, $row['password'])){
                /** เก็บข้อมูล user เข้าสู่ session เพื่อนำไปใช้งานในหน้าอื่นๆ */
                $_SESSION['id'] = $row['id'];

                /** หลังจากนั้น redirect ไปยังหน้า HOME PAGE */
                {
                    if ($row['urole'] == 'admin') {
                        $_SESSION['admin_login'] = $row['id'];
                        header("location: /backend/backend/index.php");
                    } else {
                        $_SESSION['user_login'] = $row['id'];
                        header("location: /index.php");
                    }
                }
            } else {
                echo '<script> alert("รหัสผ่านไม่ถูกต้อง") </script>';
                header('Refresh:0; url=login.php');
            }
        }else{
            /**
             * แสดงข้อความเมื่อใส่ข้อมูลผิดพลาด
             * สั่ง Refresh หน้าเว็บเพื่อไม่ให้เกิดอาการ Confirm Form Resubmission
             */
            echo '<script> alert("ไม่สามารถเข้าสู่ระบบได้โปรดกรอกข้อมูลใหม่อีกครั้ง")</script>';
            header("Refresh:0");
        } 
    }
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/login.css">
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

      <dotlottie-player src="https://lottie.host/fc46854c-ec8c-4ee6-8eba-51d369aac7b4/FxWsXZrxbR.json" background="transparent" speed="1" style="width: 300px; height: 300px; margin-right: 150px; margin-top: 20px;"  loop autoplay></dotlottie-player>

      <div class="boxa">
          <form action="" method="post">
                <h1>เข้าสู่ระบบ</h1>
                <div class="input-box">
                      <input type="text" placeholder="กรุณาใส่ username" name="username" required>
                      <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                      <input type="password" placeholder="กรุณาใส่ password" name="password" required>
                      <i class='bx bx-lock'></i>
                </div>

                <button type="submit" class="btn" name="submit">เข้าสู่ระบบ</button>

                   <div class="register-rink">
                       <p><a href="/page/register.php">ยังไม่มีบัญชี ?</a></p>
                       <a href="#">ลืมรหัสผ่าน</a>

       </div>
      </form>

      <script src="/js/search.js"></script>
    </div></section>




    


   