

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> </title>
    <link rel="stylesheet" href="/css/style.css">
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

    <!------- End Nav ------->

    <!------- Video -------->
     
    <section id="home">
        <video autoplay loop muted plays-inline class="video-home" >
            <source src="/img/bgimg.mp4" type="video/mp4">
        </video>
      </section>

    <!------- Video End ---------->

    <!--------  Banner area -->

    <section>
        <div class="banner-home">
            <div class="text-banner-home">
                <h5>LIFE LESSON</h5>
                <h1>บทเรียนชีวิต</h1>
                <h3>ยินดีต้อนรับเหล่าคนที่ต้องการเรียนรู้บทเรียนใหม่ๆ <br> บทเรียนเหล่านี้คือสิ่งที่สามารถเปลี่ยนตัวคุณไปตลอด</h3>
            </div>
            <img src="/img/book-banner.png" class="book-banner">
        </div>
    </section>

    <!------- Banner End ------->

    <!------- info ---------->

    <section>
        <div class="info-content">
            <img src="/img/iconfa.png" class="icon-infa">
            <div class="text-info">
               <h3>Life Lesson team</h3>

               <h5>คุณพร้อมแค่ไหนในการเริ่มใช้ชีวิตหลังวัยเรียน | คุณพร้อมแค่ไหนที่จะเริ่มต้นชีวิต
                <br>หากตัวคุณไม่รู้ลองใช้เว็บไซต์เราในการหาสิ่งเหล่าดูสิ | ให้เราแนะนำคุณ</h5>

               <h5>How ready are you to start living after school? | How ready are you to start living?
                  If you don't know, <br>try our website to find them | let us introduce you</h5>

               <img src="/img/signature.png" alt="">

            </div>
        </div>
    </section>

    <!-------- info end --------->

    <!--------- Blog banner-->

    <div class="banner-blog"><img src="/img/banner/bannerblog.png" alt=""></div>

    <!---------- Blog Learning ----------->
    
    <section>
      <div class="blog">

        <div class="text-blog">
            <h5 class="blog-title">Blog Life Lessons</h5>
            <a href="/page/blog_page.php">ดูทั้งหมด</a>
        </div>

        <div class="blog-content">
          <div class="blog-type">
            <img src="/img/blog/blog1.png" alt="">
              <div class="blog-line">
                <h3>Name Blog</h3>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non, animi voluptatem accusantium laborum consequuntur laboriosam neque obcaecati necessitatibus dolor!</h5>
              </div>

              <div class="button-blog">
                <button><span>รายละเอียด</span></button>
              </div>
          </div>


          
            <div class="blog-type">
              <img src="/img/blog/blog1.png" alt="">
                <div class="blog-line">
                  <h3>Name Blog</h3>
                  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non, animi voluptatem accusantium laborum consequuntur laboriosam neque obcaecati necessitatibus dolor!</h5>
                </div>

                <div class="button-blog">
                  <button><span>รายละเอียด</span></button>
                </div>
            </div>

            
              <div class="blog-type">
                <img src="/img/blog/blog1.png" alt="">
                <div class="blog-line">
                  <h3>Name Blog</h3>
                  <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non, animi voluptatem accusantium laborum consequuntur laboriosam neque obcaecati necessitatibus dolor!</h5>
                </div>

                <div class="button-blog">
                    <button><span>รายละเอียด</span></button>
                </div> 
              </div>

            </div>
            

        </div>

    </section>

    <!-------------------- End Blog -->

    <!------------ BANNER BOOK ----------->

    <div class="banner-book"><img src="/img/banner/bannerbook.png" alt=""></div>

    <!----------------------  Book Blog -->
 
    <div class="blog-books">

      <div class="text-blog">
          <h5 class="blog-title">Book Life Lessons</h5>
          <a href="/page/book_page.php">ดูทั้งหมด</a>
      </div>

      <div class="drop-blog">

        <div class="card">
          <div class="card-image"><img src="/img/product/book1.png" alt=""></div>
            <div class="card-description">
              <p class="text-title">Book</p>
              <p class="text-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
          </div>

          <div class="card">
            <div class="card-image"><img src="/img/product/book1.png" alt=""></div>
              <div class="card-description">
                <p class="text-title">Book</p>
                <p class="text-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
              </div>
          </div>

            <div class="card">
              <div class="card-image"><img src="/img/product/book1.png" alt=""></div>
                <div class="card-description">
                  <p class="text-title">Book</p>
                  <p class="text-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

    </div>

    <!------------- BANNER PODCAT ---------->
   
    <div class="banner-podcat"><img src="/img/banner/bannerpodcat.png" alt=""></div>

    <!----------- PODCAT BLOG ---->

    <section class="podcat-blog">

      <div class="text-blog">
        <h5 class="blog-title">PodCat Life Lessons</h5>
        <a href="/page/podcat_page.php">ดูทั้งหมด</a>
    </div>


      <div class="blog-video">

        <div class="card">
          <div class="card-image-container">
            <iframe class="video-size"
                 src="https://www.youtube.com/embed/CMw5jAN7caA">
            </iframe>
          </div>
          <p class="card-title">PodCat</p>
          <p class="card-des">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
            inventore natus modi repellendus dolorem unde odio sequi! Porro, cum
            maiores tempore suscipit laudantium perspiciatis, illo sunt,
            reprehenderit quae est blanditiis.
          </p>
          <div class="card-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
              <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
            </svg>
            <span class="card-btn-text">ดูวิดีโอ</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image-container">
            <iframe class="video-size"
                 src="https://www.youtube.com/embed/CMw5jAN7caA">
            </iframe>
          </div>
          <p class="card-title">PodCat</p>
          <p class="card-des">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
            inventore natus modi repellendus dolorem unde odio sequi! Porro, cum
            maiores tempore suscipit laudantium perspiciatis, illo sunt,
            reprehenderit quae est blanditiis.
          </p>
          <div class="card-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
              <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
            </svg>
            <span class="card-btn-text">ดูวิดีโอ</span>
          </div>
        </div>

        <div class="card">
          <div class="card-image-container">
            <iframe class="video-size"
                 src="https://www.youtube.com/embed/CMw5jAN7caA">
            </iframe>
          </div>
          <p class="card-title">PodCat</p>
          <p class="card-des">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
            inventore natus modi repellendus dolorem unde odio sequi! Porro, cum
            maiores tempore suscipit laudantium perspiciatis, illo sunt,
            reprehenderit quae est blanditiis.
          </p>
          <div class="card-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 512" stroke-width="0" fill="currentColor" stroke="currentColor">
              <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"></path>
            </svg>
            <span class="card-btn-text">ดูวิดีโอ</span>
          </div>
        </div>


      </div>
    </section>

    <!------------ Banner Team --------->

    <div class="banner-team" ><img src="/img/banner/bannerteam.png" alt=""></div>

    <!----------- Blog Team --------->
    


      <div class="blog-team">

      <div class="text-blog">
        <h5 class="blog-title">Team Life Lesson</h5>
      </div>

      <div class="team-blog">
          <div class="card">
            <div class="infos">
                <div class="image"><img src="/img/me/me1.png" alt=""></div>
                <div class="info">
                    <div>
                        <p class="name">AAD | BIBLE</p>
                        <p class="function">dev Fullstack</p>
                    </div>
                    <div class="stats">
                            <p class="flex flex-col">
                                AGE
                                <span class="state-value">17</span>
                            </p>
                            <p class="flex">
                                Followers
                                <span class="state-value">672</span>
                            </p>
                            
                    </div>
                </div>
            </div>
            <button class="request" type="button">
                    <a href="/page/aboutme/aboutme1.html">Add friend</a>
            </button>
        </div>

        <div class="card">
          <div class="infos">
              <div class="image"><img src="/img/me/me2.png" alt=""></div>
              <div class="info">
                  <div>
                      <p class="name">GOTJI</p>
                      <p class="function">designer</p>
                  </div>
                  <div class="stats">
                          <p class="flex flex-col">
                              AGE
                              <span class="state-value">17</span>
                          </p>
                          <p class="flex">
                              Followers
                              <span class="state-value">340</span>
                          </p>
                          
                  </div>
              </div>
          </div>
          <button class="request" type="button">
            <a href="/page/aboutme/aboutme2.html">Add friend</a>
                  
          </button>
      </div>

      <div class="card">
        <div class="infos">
            <div class="image"><img src="/img/me/me3.png" alt=""></div>
            <div class="info">
                <div>
                    <p class="name">FOLK</p>
                    <p class="function">graphics</p>
                </div>
                <div class="stats">
                        <p class="flex flex-col">
                            AGE
                            <span class="state-value">17</span>
                        </p>
                        <p class="flex">
                            Followers
                            <span class="state-value">340</span>
                        </p>
                        
                </div>
            </div>
        </div>
        <button class="request" type="button">
               <a href="/page/aboutme/aboutme3.html">Add friend</a> 
        </button>
    </div>
        
      </div>

    </div>

    </section>
    

    <!---------- Footer -->

    <footer>
      <p>Copyright © 2023 Life Lessons All rights reserved.</p>
   </footer>
    <!----- Footer End --->

    <script src="/js/search.js"></script>
</body>
</html>