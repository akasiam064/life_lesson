<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/learning.css">
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


    <div class="back-img">
        <div class="img">
            <img src="/img/bgbk.png" alt="">
        </div>
        <div class="contaifont">
            <h1>สิ่งที่โรงเรียนไม่มีสอน</h1>
            <h3 class="h3a">ทำไมถึงมีสิ่งที่โรงเรียนไม่มีสอนนะหรอ ?</h3>
            <h3>คุณอยากรู้งั้นหรอ.... ได้สิ | เราจะบอกคุณให้เอง</h3>
        </div>
    </div>

    <div class="learning">
      <h1>ทักษะจำเป็นสำหรับชีวิต ที่โรงเรียนไม่ได้สอน</h1>
      <img src="/img/akilllear.png" alt="">
      <div class="lear9">
        <li>1. <div class="taggreen">Conversation</div>  – ทักษะในการสื่อสาร สนทนา พูดคุย : ความสามารถในการสื่อสารเป็นเรื่องสำคัญที่มีผลต่อความสำเร็จในชีวิต บางคนมีความคิดดีแต่พูดไม่รู้เรื่อง บางคนเก่งแต่สนทนากับคนไม่เป็น</li>
        <li>2. <div class="taggreen">Thinking & Decision Making</div> – ทักษะในการคิดและการตัดสินใจ : เมื่อยิ่งเติบโตขึ้น การคิดและการตัดสินใจ ยิ่งกลายเป็นสิ่งจำเป็น</li>
        <li>3. <div class="taggreen">How to handle money & invest</div> – ทักษะในการบริหารจัดการเงินทองและการลงทุน : หาเงินได้เท่าไร ไม่สำคัญเท่าบริหารเงินที่ได้มายังไง</li>
        <li>4. <div class="taggreen">Manners</div> – ทักษะเรื่องมารยาทและการวางตัว : การมีสมบัติผู้ดี เป็นเสน่ห์ที่สอนกันได้ แต่แปลกใจที่ทำไมถึงไม่มีใครสอนกัน</li>
        <li>5. <div class="taggreen">How to find and actually get a job</div> – ทักษะในการหางาน : หลายคนเรียนจบมา แต่ไม่รู้ว่าจะหางานทำได้อย่างไร จะทำอะไรดี มีอาชีพอะไรที่เหมาะกับตนเองบ้าง</li>
        <li>6. <div class="taggreen">Self defense</div> – ทักษะการป้องกันตัว : โลกทุกวันนี้อยู่ยากมากขึ้น คนรู้หน้าไม่รู้ใจเดินกันขวักไขว่ อันตรายเกิดขึ้นได้เสมอ การมีศิลปะป้องกันตัวจะช่วยให้รอดได้ในสถานการณ์คับขัน</li>
        <li>7. <div class="taggreen">learning from failure</div> – ทักษะการเรียนรู้จากความล้มเหลว : คนที่ประสบความสำเร็จทุกคนล้วนผ่านความล้มเหลวมาก่อน ความสามารถในการล้ม-ลุก-เรียนรู้ เป็นสิ่งจำเป็นมาก</li>
        <li>8. <div class="taggreen">Time Management</div> – ทักษะการบริหารเวลา : เวลาคือทรัพยากรที่มีค่ามากที่สุด มีเงินมากมายเพียงใด ก็ซื้อเวลาไม่ได้ การบริหารเวลาได้ดีจะช่วยให้ชีวิตมีคุณภาพมากยิ่งขึ้น</li>
        <li>9. <div class="taggreen">How to manage stressful situations</div> – ทักษะในการบริหารความเครียด : ความสามารถในการอยู่กับความกดดันโดยไม่เครียดจนเกินไป จะช่วยให้มีคุณภาพชีวิตที่ดีขึ้น เพราะยิ่งเติบโต ปัญหา อุปสรรค และความท้าทายยิ่งซับซ้อนขึ้นเป็นเงาตามตัว ถ้าไม่รู้จักบริหารอารมณ์ตัวเองให้ดี มีโอกาสอายุสั้นได้</li>
      </div>
    </div>

    <footer>
      <p>Copyright © 2023 Life Lessons All rights reserved.</p>
   </footer>


   <script src="/js/search.js"></script>
</html>
