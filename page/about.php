<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/about.css">
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


    <div class="about-section">
      <img src="/img/pic.jpg" alt="" class="img-z" style="width: 650px; height: 550px;" >
      <div class="inner-container">
          <h1>About Us</h1>
          <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
          </p>
          <div class="skills">
              <h3>Web Design</h3>
              <h3>Photoshop & Illustrator</h3>
              <h3>Coding</h3>
          </div>
      </div>
  </div>
  <footer>
    <p>Copyright © 2023 Life Lessons All rights reserved.</p>
 </footer>

 
 <script src="/js/search.js"></script>
</html>