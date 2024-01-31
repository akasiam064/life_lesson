<?php

require_once("../Backend/backend/php/config/condb.php");

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/book_page.css">
    <!-- Boxicons CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
          <?php 
          session_start();

          if (isset($_SESSION['id'])) {?>
            <li>
            <a href="#">Username</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="/page/setting/setting.php">setting</a></li>
              <li><a href="/page/comment/comment.php">แสดงความคิดเห็น</a></li>
              <li><a href="/page/logout.php">ออกจากระบบ</a></li>
            </ul>
          </li>
          <?php } else {?>
          <li><a href="/page/login.php">LOGIN</a></li>
        </ul>
        <?php }?>
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

    <!-------- img banner-->

    <section>
      <img src="/img/banner/bannerbook.png" alt="">
    </section>

  <div class="type-search">

    <div class="name-type"><h2>BOOK | PAGE</h2></div>

  </div>

    
  <?php
    $sql = "SELECT * FROM life_book";
    $book_data = mysqli_query($conn, $sql);

?>

    <!--------------  BODY CARD -------->

    <div class="container d-flex flex-wrap m-auto justify-content-center" style="max-width: 100%;">
    <?php foreach ($book_data as $data) : ?>

    <div class="card shadow" style="width: 21rem; margin-left: 10px; margin-top: 10px; border: 10px solid #FFF; height: auto;">
  <img src="<?= $data['Image_URL_Sec1']; ?>" class="card-img-top" alt="..." style="max-width: 100%; max-height: 300px; border-radius: 10px;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['name']; ?></h5>
    <p class="card-text"><?= $data['detail']; ?></p>
    <a href="../page/1.php?id=<?=$data['id']?>" class="btn btn-primary" style="width: 100%;">ดูรายละเอียด</a>
  </div>
</div>



  <?php endforeach; ?>
</div>


  
    </div>



        <!---------- Footer -->

        <footer>
          <p>Copyright © 2023 Life Lessons All rights reserved.</p>
       </footer>
      <!----- Footer End --->
  
      <script src="/js/search.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>