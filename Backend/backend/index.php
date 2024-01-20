<?php

  session_start();
  require_once("../backend/php/config/connection.php")

?>



<!DOCTYPE html>
<html lang="th" >
  <head>
    <meta charset="UTF-8" />
    <title>ฺBACKEND | LIFE LESSON</title>
    <link rel="stylesheet" href="../backend/css/style.css" />
    <link rel="shortcut icon" href="https://img2.pic.in.th/pic/iconfa.png">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-code-alt'></i>
        <div class="logo_name">LIFE LESSON</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <i class="bx bx-search"></i>
          <input type="text" placeholder="Search..." />
          <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="../backend/index.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="../backend/php/user.php">
            <i class="bx bx-user"></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="../backend/php/book.php">
            <i class="bx bx-book-open"></i>
            <span class="links_name">เพิ่มข้อมูล หนังสือ</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล หนังสือ</span>
        </li>
        <li>
          <a href="../backend/php/podcat.php">
            <i class="bx bx-book-heart"></i>
            <span class="links_name">เพิ่มข้อมูล potcat</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล potcat</span>
        </li>
        <li>
          <a href="../backend/php/blog.php">
            <i class="bx bxl-blogger"></i>
            <span class="links_name">เพิ่มข้อมูล blog</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล blog</span>
        </li>
        <li>
          <a href="../backend/php/comment/comment.php">
            <i class='bx bx-comment'></i>
            <span class="links_name">คอมเม้น</span>
          </a>
          <span class="tooltip">ดูคอมเม้น</span>
        </li>
        <li>
          <a href="/Backend/backend/php/setting.html">
            <i class="bx bx-cog"></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="/backend/backend/img/me1.png" alt="profileImg" />
            <div class="name_job">
              <div class="name">admin life lesson</div>
              <div class="job">Devloper</div>
            </div>
          </div>
          <button><a href="/backend/backend/php/page/life_out.php"><i class="bx bx-log-out" id="log_out"></i></a></button>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="text"><b>DASHBOARD</b></div>
      <div class="border-console">
        <div class="user">
          <?php 
          
          $sql = "SELECT COUNT(*) as id From life_user";
          $query = $conn->prepare($sql);
          $query->execute();
          $fetch = $query->fetch();

          ?>
          <span><?= $fetch['id'] ?> ผู้ใช้</span>
        </div>
        <div class="viwe">
        <?php 
          
          $sql = "SELECT COUNT(*) as nouser From life_counter";
          $query = $conn->prepare($sql);
          $query->execute();
          $fetch = $query->fetch();

          ?>
          <span><?= $fetch['nouser'] ?> คนดู</span>
        </div>
        <div class="bbp"><span>
          16 หนังสือ
        </span></div>
      </div>
      <div class="alert-input">
        <div class="ass">
          <span class="as">แจ้งเตือน</span>
        </div>
        
        <div class="message">
          <div class="m1">มีการเข้าสู่ระบบ dev  |   <span>1.56 pm</span></div>
          <div class="m2">มีการเพิ่มฐานข้อมูล | BOOK | <span>2 pm</span></div>
          <div class="m3">มีการแข้ไขฐานข้อมูล | BOOK | <span>3.15 pm</span></div>
          <div class="m4">มีการลบฐานข้อมูล | BOOK |<span>3.20 pm</span></div>
        </div>
      </div>
    </section>

    <script src="/Backend/backend/js/create_book.js"></script>
    <script src="/Backend/backend/js/slim.js"></script>
    <script src="/Backend/backend/js/popper.js"></script>
    <script src="/Backend/backend/js/bootstrap.js"></script>
  </body>
</html>
