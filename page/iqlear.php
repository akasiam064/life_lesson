<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/iqlear.css">
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

    <div class="Header-Name">
        <div class="Header">
            <div class="name">พลังแห่งคำพูด</div>
            <div class="name2">จากบุคคลผู้เป็นแรงบันดาลใจ</div>
        </div>
        <div class="typename">
            <p>คุณรู้หรือไม่ คำพูดนั้นก็ให้แรงบันดาลใจแก่คุณได้และมันก็ทำให้คุณท้อได้เหมือนกัน</p>
            <p class="fb">นี่คือคำพูดของผู้ที่ประสบความสำเร็จในชีวิต</p>
        </div>
    </div>

    <div class="type1">
        <img src="/img/business.png" alt="">
        <div class="inputname">
            <h3>Leadership</h3>
            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium quibusdam ratione dignissimos nemo consequatur, magnam architecto pariatur magni hic? Dolor.</h5>
        </div>
    </div>

    <div class="creative">
        <div class="box">
          <i class="fas fa-quote-left quote"></i>
          <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
          <div class="content">
            <div class="info">
              <div class="name">Alex Smith</div>
              <div class="job">Designer | Developer</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <div class="image">
              <img src="/img/img/profile-1.jpeg" alt="">
            </div>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-quote-left quote"></i>
          <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
          <div class="content">
            <div class="info">
              <div class="name">Steven Chris</div>
              <div class="job">YouTuber | Blogger</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <div class="image">
              <img src="/img/img/profile-2.jpeg" alt="">
            </div>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-quote-left  quote"></i>
          <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
          <div class="content">
            <div class="info">
              <div class="name">Kristina Bellis</div>
              <div class="job">Freelancer | Advertiser</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <div class="image">
              <img src="/img/img/profile-3.jpeg" alt="">
            </div>
          </div>
        </div>

        <div class="box">
            <i class="fas fa-quote-left  quote"></i>
            <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
            <div class="content">
              <div class="info">
                <div class="name">Kristina Bellis</div>
                <div class="job">Freelancer | Advertiser</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="/img/img/profile-3.jpeg" alt="">
              </div>
            </div>
          </div>

          <div class="box">
            <i class="fas fa-quote-left  quote"></i>
            <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
            <div class="content">
              <div class="info">
                <div class="name">Kristina Bellis</div>
                <div class="job">Freelancer | Advertiser</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="/img/img/profile-3.jpeg" alt="">
              </div>
            </div>
          </div>

          <div class="box">
            <i class="fas fa-quote-left  quote"></i>
            <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
            <div class="content">
              <div class="info">
                <div class="name">Kristina Bellis</div>
                <div class="job">Freelancer | Advertiser</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="/img/img/profile-3.jpeg" alt="">
              </div>
            </div>
          </div>
      </div>

      <footer>
        <p>Copyright © 2023 Life Lessons All rights reserved.</p>
      </footer>


      <script src="/js/search.js"></script>
</html>