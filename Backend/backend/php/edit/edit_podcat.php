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
          <a href="../php/comment/comment.php">
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
    <section class="home-section">
      <div class="form-create">
        <div class="Type-name"><H1>แก้ไข podcat</H1></div>
        <div class="img-name-propertie">
          <div class="img-twolow">
            <img src="/img/img.png" alt="">
            <div class="button ">
              <div class="text-icon">
                <i class="bx bx-cloud-upload"></i>
                <span class="text">อัพโหลด</span>
              </div>
            </div>
          </div>
          <div class="name-type">
            <h5>ชื่อpdocat</h5>
            <input type="nameinput" name="name-type" placeholder="ชื่อpdocat">
            <div class="propertie">
              <h5>รายละเอียด</h5>
              <input type="propertie" placeholder="รายละเอียด" class="propertie-h5">
            </div>
            <div class="link-propertie">
              <h5>Link</h5>
              <input type="propertie" placeholder="รายละเอียด" class="propertie-link">
            </div>
            <div class="button-type">
              <button class="alert-yon">
                <span class="yon"><a href="../index.html">ย้อนกลับ</a></span>
            </button>
              <button class="ui-btn">
                <span>
                  ยืนยันทำรายการ
                </span>
              </button>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <script src="/js/create_book.js"></script>
  </body>
</html>
