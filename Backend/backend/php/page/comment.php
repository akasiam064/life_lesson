<?php 

require_once("../config/connection.php")

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>ฺBACKEND | LIFE LESSON</title>
    <link rel="stylesheet" href="/Backend/backend/css/all_bbp.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://img2.pic.in.th/pic/iconfa.png">
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
          <input type="text" placeholder="Search/Backend/backend." />
          <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="/Backend/backend/index.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="/Backend/backend/php/user.php">
            <i class="bx bx-user"></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="/Backend/backend/php/book.php">
            <i class="bx bx-book-open"></i>
            <span class="links_name">เพิ่มข้อมูล หนังสือ</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล หนังสือ</span>
        </li>
        <li>
          <a href="/Backend/backend/php/podcat.php">
            <i class="bx bx-book-heart"></i>
            <span class="links_name">เพิ่มข้อมูล potcat</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล potcat</span>
        </li>
        <li>
          <a href="/Backend/backend/php/blog.php">
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
            <img src="/img/admin.png" alt="profileImg" />
            <div class="name_job">
              <div class="name">admin life lesson</div>
              <div class="job">Devloper</div>
            </div>
          </div>
          <a href="../php/page/life_out.php"><i class="bx bx-log-out" id="log_out"></i></a>
        </li>
      </ul>
    </div>

    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="pb-4"> แสดงข้อมูล COMMENT </h1>
                        

                          <?php 
          
                         $sql = "SELECT COUNT(*) as id From life_comment";
                         $query = $conn->prepare($sql);
                         $query->execute();
                         $fetch = $query->fetch();

                         ?>

                        <span class="float-end" >มีข้อมูล comment ทั้งหมด <?= $fetch['id'] ?> รายการ </span>     
                    </div>
                    <div class="col-lg-12">

                        <div class="table-responsive" >
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                    <th>#</th>
                                    <th>ชื่อ</th>
                                    <th>คอมเม้น</th>
                                    <th>เวลา</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql ="SELECT * FROM life_comment";
                                $user = $conn->prepare($sql);
                                $user->execute();
                                $userItem = $user->fetch();

                               

                                {

                                ?>
                                <?PHP foreach($user as $userItem) : ?>
                                
                                    <tr>
                                      <td><?= $userItem['id'] ?></td>
                                      <td><?= $userItem['name'] ?></td>
                                      <td><?= $userItem['comment'] ?></td>
                                      <td><?= $userItem['comment_time'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php 
                                }
                                ?>
                                
                                </tbody>
                            </table>    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/Backend/backend/js/create_book.js"></script>
    <script src="/Backend/backend/js/slim.js"></script>
    <script src="/Backend/backend/js/popper.js"></script>
    <script src="/Backend/backend/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>