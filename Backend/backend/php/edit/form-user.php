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


    <div class="container-sm px1">
        <div class="card mt3 shadow-sm">
            <div class="card-header">
                <h4 class="mb-0">เเปลี่ยนแปลงข้อมูล <a href="../user.php" class="btn btn-dark float-end">Back</a></h4>
            </div>

            <form class="row gy-4" action="../edit/edit_user.php?id=<?=$uid?>" method="POST">
            <div class="card-body">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="email" required name="email" class="form-control" value="<?php echo $row['email'] ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Username</label>
                            <input type="text" required name="username" class="form-control" value="<?php echo $row['username'] ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Password</label>
                            <input type="password" required name="password" class="form-control" value="<?php echo $row['password'] ?>">
                        </div>
                        <div class="input-group mb-3">
                             <label class="input-group-text" for="inputGroupSelect01" >ตำแหน่ง</label>
                             <select class="form-select" id="inputGroupSelect01" name="urole">
                            <option value="user">ผู้ใช้</option>
                            <option value="admin">ผู้ดูแล</option>
                            
                               </select>
                        </div>
                        <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="submit" name="submit">ยืนยันการเปลี่ยนแปลง</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    
    <script src="/Backend/backend/js/create_book.js"></script>
    <script src="/Backend/backend/js/slim.js"></script>
    <script src="/Backend/backend/js/popper.js"></script>
    <script src="/Backend/backend/js/bootstrap.js"></script>