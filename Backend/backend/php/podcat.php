<?php 

require_once("../php/config/connection.php")

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>ฺBACKEND | LIFE LESSON</title>
    <link rel="stylesheet" href="/Backend/backend/css/all_bbp.css" />
    <link rel="shortcut icon" href="/img/iconfa.png" type="image/x-icon">
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
          <input type="text" placeholder="Search..." />
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
        <li>
          <a href="../php/comment/comment.php">
            <i class='bx bx-comment'></i>
            <span class="links_name">คอมเม้น</span>
          </a>
          <span class="tooltip">ดูคอมเม้น</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="/Backend/backend/img/me1.png" alt="profileImg" />
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
                        <h1 class="pb-4"> แสดงข้อมูล PODCAT </h1>
                        <a href="../php/create/create_podcat.php">

                        <button class="Btn" >
  
                            <div class="sign">+</div>
                            
                            <div class="text">Create</div>
                          </button>


                        </a>

                        <?php 
          
                         $sql = "SELECT COUNT(*) as id From life_podcat";
                         $query = $conn->prepare($sql);
                         $query->execute();
                         $fetch = $query->fetch();

                         ?>

                        <span class="float-end" >มีข้อมูล PODCAT ทั้งหมด <?= $fetch['id'] ?> รายการ </span>     
                    </div>
                    <div class="col-lg-10">
                        <div class="table-responsive" >
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                    <th>#</th>
                                    <th>youtube</th>
                                    <th>ชื่อหัวข้อ</th>
                                    <th>ผู้แต่ง</th>
                                    <th>รายละเอียด</th>
                                    <th>จัดการ</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $sql ="SELECT * FROM life_podcat";
                                $podcat_data = $conn->prepare($sql);
                                $podcat_data->execute();
                                $data = $podcat_data->fetch();

                               

                                {

                                ?>
                                <?PHP foreach($podcat_data as $data) : ?>
                                
                                    <tr class="text-center">
                                        <td><?= $data['id']; ?></td>
                                        <td><video width="60" height="60" >
                                                          <source src="<?= $data['YT_URL']; ?>" type="video/mp4">
                                        </video></td>
                                        <td><?= $data['name']; ?></td>
                                        
                                        <td><?= $data['refer']; ?></td>
                                        <td><?= $data['detail']; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="animated-button">
                                                    <span>รายละเอียด</span>
                                                  </button>
                                                  
                                                  <button class="edit-button"> <a href="/Backend/backend/php/edit/edit_blog.php">EDIT</a>
                                                  </button>
                                                <a href="../php/delete/delete_podcat.php?id=<?=$data['id']?>">
                                                <button class="bin-button">
                                                    <svg
                                                      class="bin-top"
                                                      viewBox="0 0 39 7"
                                                      fill="none"
                                                      xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                      <line y1="5" x2="39" y2="5" stroke="white" stroke-width="4"></line>
                                                      <line
                                                        x1="12"
                                                        y1="1.5"
                                                        x2="26.0357"
                                                        y2="1.5"
                                                        stroke="white"
                                                        stroke-width="3"
                                                      ></line>
                                                    </svg>
                                                    <svg
                                                      class="bin-bottom"
                                                      viewBox="0 0 33 39"
                                                      fill="none"
                                                      xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                      <mask id="path-1-inside-1_8_19" fill="white">
                                                        <path
                                                          d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"
                                                        ></path>
                                                      </mask>
                                                      <path
                                                        d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z"
                                                        fill="white"
                                                        mask="url(#path-1-inside-1_8_19)"
                                                      ></path>
                                                      <path d="M12 6L12 29" stroke="white" stroke-width="4"></path>
                                                      <path d="M21 6V29" stroke="white" stroke-width="4"></path>
                                                    </svg>
                                                  </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php endforeach; ?>
                                <?php 
                                }
                                ?>
                                    
                                    </div>
                                
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
  </body>
</html>