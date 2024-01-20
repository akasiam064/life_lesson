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
          <a href="/Backend/backend/index.html">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="/Backend/backend/php/user.html">
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
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="/Backend/backend/img/me1.png" alt="profileImg" />
            <div class="name_job">
              <div class="name">admin life lesson</div>
              <div class="job">Devloper</div>
            </div>
          </div>
          <i class="bx bx-log-out" id="log_out"></i>
        </li>
      </ul>
    </div>

    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="pb-4"> แสดงข้อมูล BOOK </h1>
                        <button class="Btn">
  
                            <div class="sign">+</div>
                            
                            <div class="text">Create</div>
                          </button>
                        <span class="float-end" >มีข้อมูลหนังสือทั้งหมด  รายการ </span>     
                    </div>
                    <div class="col-lg-10">
                        <div class="table-responsive" >
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center text-light bg-dark">
                                    <th>#</th>
                                    <th>img</th>
                                    <th>username</th>
                                    <th>รายละเอียด</th>
                                    <th>จัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                    <tr class="text-center">
                                        <td> 1 </td>
                                        <td><img src="/Backend/backend/img/me1.png" alt="" style="width: 60px; height: 60px;"></td>
                                        <td>  aaaa</td>
                                        
                                        <td> assss </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="animated-button">
                                                    <span>รายละเอียด</span>
                                                  </button>
                                                  
                                                  <button class="edit-button"> <a href="/Backend/backend/php/edit/edit_blog.html">EDIT</a>
                                                  </button>
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
                                            </div>
                                        </td>
                                    </tr>
                                    
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