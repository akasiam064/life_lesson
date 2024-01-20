<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting | LifeLesson</title>
    <link rel="stylesheet" href="/css/editpassword.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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

      <div class="all-life" >

        <a href="/index.html">

            <div class="return">
                <i class='bx bxs-chevrons-left'></i>
                <span>ย้อนกลับไป</span>
            </div>

        </a>
    
          <div class="setting-contai">
            <div class="setting">
                <div class="resoute">
                    <img src="/img/user.png" alt="">
                </div>
                <div class="block-link">
                    <ul>
                        <i class='bx bxs-id-card'></i>
                        <li><a href="/page/setting/profirechang.php">เปลี่ยนโปรไฟล์</a></li>
                    </ul>
                    <ul>
                        <i class='bx bxs-lock-alt'></i>
                        <li><a href="/page/setting/editpassword.php">เปลี่ยนรหัสผ่าน</a></li>
                    </ul>
                    <ul>
                        <i class='bx bxs-lock-alt'></i>
                        <li><a href="">บันทึก LOG</a></li>
                    </ul>
                </div>
            </div>
            <div class="detail-setting">
                <div class="header-detail">
                    <h2>แก้ไขบัญชี</h2>
                </div>

                <div class="acconting">
                    <div class="group">
                        <svg stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" stroke-linejoin="round" stroke-linecap="round"></path>
                      </svg>
                      <input class="input" type="password" placeholder="กรอกรหัสผ่าน">
                      </div>
                      <div class="group">
                        <svg stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" stroke-linejoin="round" stroke-linecap="round"></path>
                      </svg>
                      <input class="input" type="password" placeholder="กรอกรหัสผ่านอีกครั้ง">
                      </div>
                </div>

                <button>
                  <span>บันทึกการเปลี่ยนแปลง</span>
                </button>
            </div>
          </div>

      </div>
      

</body>
</html>