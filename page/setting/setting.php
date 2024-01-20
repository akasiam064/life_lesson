<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting | LifeLesson</title>
    <link rel="stylesheet" href="/css/setting.css">
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
                    <h2>รายละเอียดบัญชี</h2>
                </div>

                <div class="acconting">
                    <ul><li>Username :<span> Admin</span></li></ul>
                    <ul><li>ชื่อ :<span> Life</span></li></ul>
                    <ul><li>นามสกุล :<span> Lesson</span></li></ul>
                    <ul><li>รหัสผ่าน :<span> @asdsada25a5sd</span></li></ul>
                    <ul><li>วันที่สร้าง :<span> 2024-01-06 7:00 AM</span></li></ul>
                </div>
            </div>
          </div>

      </div>
      

</body>
</html>