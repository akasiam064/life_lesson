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

    <?php 
          
                         $sql = "SELECT COUNT(*) as id From life_user";
                         $query = $conn->prepare($sql);
                         $query->execute();
                         $fetch = $query->fetch();

                         ?>
 

    <div class="home-section">
       <h1>Dashboard Life Team</h1>
       <div class="alertPanel">

        <div class="user">
          <p>จำนวนผู้ใช้</p>
          <h3><?= $fetch['id'] ?> USER</h3>
          <div class="time-stamp">
          <i class='bx bx-time'></i>
          <span>อัพเดทล่าสุด</span>
          </div>
        </div>

        <div class="book">
          <p>จำนวนหนังสือ</p>
          <h3>3 BOOK</h3>
          <div class="time-stamp">
          <i class='bx bx-time'></i>
          <span>อัพเดทล่าสุด</span>
          </div>
        </div>

        <div class="podcat">
          <p>จำนวน podcat</p>
          <h3>4 podcat</h3>
          <div class="time-stamp">
          <i class='bx bx-time'></i>
          <span>อัพเดทล่าสุด</span>
          </div>
        </div>

        <div class="blog">
          <p>จำนวน blog</p>
          <h3>4 BLOG</h3>
          <div class="time-stamp">
          <i class='bx bx-time'></i>
          <span>อัพเดทล่าสุด</span>
          </div>
        </div>
       </div>
    </div>



    <script src="/Backend/backend/js/create_book.js"></script>
    <script src="/Backend/backend/js/slim.js"></script>
    <script src="/Backend/backend/js/popper.js"></script>
    <script src="/Backend/backend/js/bootstrap.js"></script>
  </body>
</html>
