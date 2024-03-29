<?php

require_once("../Backend/backend/php/config/condb.php");

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/1.css">
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
  <?php

    $wid = $_GET['id'];

    $sql = "SELECT * FROM life_blog WHERE id = '$wid'";
    $book_data = mysqli_query($conn, $sql);


?>

  <div class="product">

  <?php foreach ($book_data as $data) : ?>
    <div class="faget">
        <div class="img-return">
            <div class="c-las">
                <i class="fa-solid fa-arrow-left button" id="prev"></i>
                    <div class="image-container">
                         <div class="carousel">
                              <img src="<?= $data['Image_URL_Sec1']; ?>" alt="" />
                              <img src="<?= $data['Image_URL_Sec1']; ?>" alt="" />
                              <img src="<?= $data['Image_URL_Sec1']; ?>" alt="" />
                               <img src="<?= $data['Image_URL_Sec1']; ?>" alt="" />
                         </div>
                <i class="fa-solid fa-arrow-right button" id="next"></i>
            </div>
            </div>

            
            <div class="bun"> 
                
                <a href="/index.php">

                    <button>
                        <span class="text">ย้อนกลับ</span>
                      </button>

                </a>
                
            </div>
        </div>
        <div class="detail-point">
            <div class="name-pro">
                <h5><?= $data['name']; ?></h5>
            </div>

            <div class="propertie">
                <span><?= $data['detail']; ?></span>
            </div>

            <div class="refer">
                <h3>อ้างอิง | <?= $data['refer']; ?></h3>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
  </div>

  <script src="/js/search.js"></script>