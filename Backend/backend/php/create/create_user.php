

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>ฺBACKEND | LIFE LESSON</title>
    <link rel="stylesheet" href="/Backend/backend/css/create_user.css" />
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
          <a href="/Backend/backend/php/book.html">
            <i class="bx bx-book-open"></i>
            <span class="links_name">เพิ่มข้อมูล หนังสือ</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล หนังสือ</span>
        </li>
        <li>
          <a href="/Backend/backend/php/podcat.html">
            <i class="bx bx-book-heart"></i>
            <span class="links_name">เพิ่มข้อมูล potcat</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล potcat</span>
        </li>
        <li>
          <a href="/Backend/backend/php/blog.html">
            <i class="bx bxl-blogger"></i>
            <span class="links_name">เพิ่มข้อมูล blog</span>
          </a>
          <span class="tooltip">เพิ่มข้อมูล blog</span>
        </li>
        <li>
          <a href="../comment/comment.php">
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


    <div class="container-sm px1">
        <div class="card mt3 shadow-sm">
            <div class="card-header">
                <h4 class="mb-0">เพิ่มข้อมูลผู้ใช้ <a href="../user.php" class="btn btn-dark float-end">Back</a></h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="email" required name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Username</label>
                            <input type="text" required name="username" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Password</label>
                            <input type="password" required name="password" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                             <label class="input-group-text" for="inputGroupSelect01">ตำแหน่ง</label>
                             <select class="form-select" id="inputGroupSelect01" name="urole">
                            <option value="user">ผู้ใช้</option>
                            <option value="admin">ผู้ดูแล</option>
                               </select>
                        </div>
                        <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="saveuser">ยืนยันการสร้างผู้ใช้</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php 

if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['urole']) ) {
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    require_once '../config/connection.php';

    $email = $_POST['email'];
    $username = $_POST['username'];
    $urole = $_POST['urole'];
    
    $password = ($_POST['password']);
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT); 
    $stmt = $conn->prepare("SELECT id FROM life_user WHERE username = :username ");
    //$stmt->bindParam(':username', $username , PDO::PARAM_STR);
    $stmt->execute(array(':username' => $username));

    if($stmt->rowCount() > 0){
        echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "Username ซ้ำ !! ",  
                          text: "กรุณาสมัครใหม่อีกครั้ง",
                          type: "warning"
                      }, function() {
                          window.location = "../create/create_user.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
              </script>';
    }else{ //ถ้า username ไม่ซ้ำ เก็บข้อมูลลงตาราง
            //sql insert
            $stmt = $conn->prepare("INSERT INTO life_user (email, username, password, urole)
            VALUES (:email, :username, :password, :urole)");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username , PDO::PARAM_STR);
            $stmt->bindParam(':password', $passwordHashed , PDO::PARAM_STR);
            $stmt->bindParam(':urole', $urole , PDO::PARAM_STR);
            $result = $stmt->execute();
            if($result){
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เพิ่มข้อมูลสำเร็จ",
                          type: "success"
                      }, function() {
                          window.location = "../create/create_user.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            }else{
               echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เกิดข้อผิดพลาด",
                          type: "error"
                      }, function() {
                          window.location = "../create/create_user.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            }
            $conn = null; //close connect db
      }
}



?>

    <script src="/Backend/backend/js/create_book.js"></script>
    <script src="/Backend/backend/js/slim.js"></script>
    <script src="/Backend/backend/js/popper.js"></script>
    <script src="/Backend/backend/js/bootstrap.js"></script>