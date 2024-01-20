
<?php 

    require_once '../comment/retinepost.php';
    $com = new Comment();

?>

<!DOCTYPE html>



<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Comment | Page</title>
    <link rel="stylesheet" href="/css/comment.css">
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
              <li><a href="/page/setting.html">setting</a></li>
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

  <div class="h">ระบบ comment </div>

  <div class="box">
        <ul>
            <?php 
                if($result = $com->index()) {
                while ($data = $result->fetch_assoc()) {
            ?>
                <li>
                    <b><?php echo $data['name']; ?></b> - <?php echo $data['comment']; ?> - <?php echo $com->dateFormat($data['comment_time']); ?>
                </li>
                <?php } ?>
            <?php }?>
        </ul>
    </div>

  <?php 
    
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo "<span style='color: green; font-size: 20px'>".$msg."</span>";
        }

    ?>

<form action="../comment/post_com.php" method="post">
  <div class="all">
    <div class="type-user">
    <div class="meet">
      <div class="user">ชื่อผู้ใช้ : username</div>
      <div class="roleCM">ตำแหน่ง : user</div>
    </div>
  </div>

  <div class="comments">
    <div class="com">
      <div class="form-control">
      <div class="coolinput">
    <input type="text" placeholder="ใส่ชื่อ" name="name" class="input">
    </div>
        <input class="input input-alt" placeholder="ใส่คอมเม้น" required="" type="text" name="comment">
        <span class="input-border input-border-alt" ></span>
      </div>
    </div>
    <button type="submit" name="submit" value="Post">
      <span >ส่งคอมเม้น</span>
    </button>
  </div>
</div>

</form>
  

  
