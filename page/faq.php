<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/faq.css">
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

<section class="img-z">
    <div class="img-banner">
        <div class="img">
            <img src="/img/banner/1540.png" >
        </div>
    </div>
</section> 


<h1>คำถามที่พบบ่อย FAQ</h1>

<div class="tp-con">

<div class="faq active">
  <button class="accordion">เว็บไซต์เกี่ยวกับอะไร ?
  <i class="fa-solid fa-chevron-down"></i> </button>
  <div class="pannel">
    <p>เว็บไซต์นี้จัดทำเพื่อแนะนำหนังสือและบทเรียนเพื่อพัฒนาตนเองเท่านั้น</p>
  </div>
</div>

<div class="faq active">
  <button class="accordion">คุณสามารถสั่งซื้อหนังสือจากเราได้หรือไม่ ?
  <i class="fa-solid fa-chevron-down" ></i> </button>
  <div class="pannel">
    <p>คุณไม่สามารถสั่งซื้อหนังสือจากเว็บไซต์ของเราได้ เราเป็นเพียงเว็บไซต์แนะนำเท่านั้น</p>
  </div>
</div>

<div class="faq active">
  <button class="accordion">คุณสามารถติดตามเราได้ที่ไหน ?
  <i class="fa-solid fa-chevron-down" ></i> </button>
  <div class="pannel">
    <p>คุณสามารถติดตามเราได้ที่ facebook,instagram,website ได้ที่หน้า social media</p>
  </div>
</div>

<div class="faq active">
  <button class="accordion">เว็บไซต์นี้มีการรองรับ E-BOOK หรือยัง
  <i class="fa-solid fa-chevron-down" ></i> </button>
  <div class="pannel">
    <p>ทางเว็บไซต์ยังไม่ได้มีการรองรับ E-BOOK</p>
  </div>
</div>

</div>

     <script>
        var acc = document.getElementsByClassName ("accordion")
        var i;

        for(i = 0; i < acc.length ; i++){
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            this.parentElement.classList.toggle("active");

            var pannel = this.nextElementSibling;

            if (pannel.style.display === "block") {
              pannel.style.display = "none";
            }else {
              pannel.style.display = "block";
            }
          })

          
        }
     </script>
   

   <footer>
    <p>Copyright © 2023 Life Lessons All rights reserved.</p>
 </footer>


 <script src="/js/search.js"></script>
</body>
</html>