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
                <h4 class="mb-0">เพิ่มข้อมูลหนังสือ <a href="../user.php" class="btn btn-dark float-end">Back</a></h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">ชื่อหัวข้อ</label>
                            <input type="email" required name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">อ้างอิง</label>
                            <input type="text" required name="username" class="form-control">
                        </div>
                        <div class="mb-3">
                           <label for="exampleFormControlTextarea1" class="form-label">รายละเอียด</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col m-3">
                        <div class="YT-V-Size" style="max-width: 100%; max-height: 200px;" id="player"></div>
                        <label for="youtube-url">ลิงก์ YouTube:</label>
                        <input class="form-control" type="text" id="youtube-url" placeholder="Enter YouTube URL" required name="YT_URL" value="<?= $data['YT_URL']; ?>">
                        <br>
                        <div class="YT-V-Size" id="player"></div>
                        </div>
                        

                        <div class="col m-3">
                        <img src="" alt="Image Preview" id="image-preview-sec2" style="max-width: 100%; max-height: 200px;">
                        <label for="image-url-sec2">ภาพ product img 1</label>
                        <br>
                        <input class="form-control" type="text" name="Image_URL_Sec2" id="image-url-sec2" placeholder="ใส่ url ภาพ" oninput="preview('sec2')" required value="
                        <?php
                                if (!empty($data['Image_URL_Sec2'])) {
                                    echo $data['Image_URL_Sec2'];
                                        } else {
                                            if (!empty($data['Img_Name_Sec2'])) {
                                                echo '/img/product/' . $data['Img_Name_Sec2'];
                                                        } else {
                                            echo '';
                                        }
                                    }
                        ?>">
                        <br>
                        <div class="d-grid gap-2">
                                 <button class="btn btn-danger" type="button" onclick="clearFileInput('sec2')">ลบรูปภาพ</button>
                        </div>
                        </div>

                        <div class="col m-3">
                        <img src="" alt="Image Preview" id="image-preview-sec3" style="max-width: 100%; max-height: 200px;">
                        <label for="image-url-sec2">ภาพ product img 2</label>
                        <br>
                        <input class="form-control" type="text" name="Image_URL_Sec3" id="image-url-sec3" placeholder="ใส่ url ภาพ" oninput="preview('sec3')" required value="
                        <?php
                                if (!empty($data['Image_URL_Sec3'])) {
                                    echo $data['Image_URL_Sec3'];
                                        } else {
                                            if (!empty($data['Img_Name_Sec3'])) {
                                                echo '/img/product/' . $data['Img_Name_Sec3'];
                                                        } else {
                                            echo '';
                                        }
                                    }
                        ?>">
                        <br>
                        <div class="d-grid gap-2">
                                 <button class="btn btn-danger" type="button" onclick="clearFileInput('sec3')">ลบรูปภาพ</button>
                        </div>
                        </div>
                        
                        <div class="col m-3">
                        <img src="" alt="Image Preview" id="image-preview-sec4" style="max-width: 100%; max-height: 200px;">
                        <label for="image-url-sec2">ภาพ product img 3</label>
                        <br>
                        <input class="form-control" type="text" name="Image_URL_Sec4" id="image-url-sec4" placeholder="ใส่ url ภาพ" oninput="preview('sec4')" required value="
                        <?php
                                if (!empty($data['Image_URL_Sec2'])) {
                                    echo $data['Image_URL_Sec2'];
                                        } else {
                                            if (!empty($data['Img_Name_Sec4'])) {
                                                echo '/img/product/' . $data['Img_Name_Sec4'];
                                                        } else {
                                            echo '';
                                        }
                                    }
                        ?>">
                        <br>
                        <div class="d-grid gap-2">
                                 <button class="btn btn-danger" type="button" onclick="clearFileInput('sec4')">ลบรูปภาพ</button>
                        </div>
                        </div>
                        
                        
                        </div>
                        
                        <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="saveuser">ยืนยันการสร้าง product หนังสือ</button>
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


    <script>
        function preview(section) {
            const urlInput = document.getElementById(`image-url-${section}`);
            const fileInput = document.getElementById(`image-upload-${section}`);

            if (urlInput.value) {
                previewImage(urlInput.value, section);
            } else if (fileInput.files.length > 0) {
                previewFile(section);
            }
        }

        function previewImage(url, section) {
            document.getElementById(`image-preview-${section}`).src = url;
        }

        function previewFile(section) {
            const fileInput = document.getElementById(`image-upload-${section}`);
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById(`image-preview-${section}`).src = e.target.result;
                };

                reader.readAsDataURL(file);
            }
        }

        function clearFileInput(section) {
            var fileInput = document.getElementById(`image-upload-${section}`);
            var newFileInput = document.createElement('input');
            newFileInput.type = 'file';
            newFileInput.name = `Img_Name_${section}`;
            newFileInput.id = `image-upload-${section}`;
            newFileInput.accept = 'image/gif, image/jpeg, image/jpg, image/png, image/webp';
            newFileInput.oninput = () => preview(section);

            fileInput.parentNode.replaceChild(newFileInput, fileInput);
            document.getElementById(`image-preview-${section}`).src = '';
        }
    </script>
    <script>
        var player;

        // Function to extract YouTube video ID from URL
        function getYoutubeVideoId(url) {
            var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
            var match = url.match(regExp);
            return (match && match[7].length == 11) ? match[7] : false;
        }

        // Function to create the YouTube player and generate embed code
        function createYoutubePlayer(videoId) {
            // Destroy the existing player if it exists
            if (player) {
                player.destroy();
            }

            // Create the YouTube player
            player = new YT.Player('player', {
                height: '360',
                width: '640',
                videoId: videoId,
            });

            // Generate embed code for the given video ID
            var embedCode = '<iframe width="640" height="360" src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allowfullscreen></iframe>';

            // Display the embed code or use it as needed
            console.log("Embed Code:", embedCode);
        }


        // Event listener for input change
        document.getElementById('youtube-url').addEventListener('input', function() {
            // Get the YouTube URL from the input
            var youtubeUrl = this.value;

            // Extract the video ID from the URL
            var videoId = getYoutubeVideoId(youtubeUrl);

            // Check if a valid video ID is extracted
            if (videoId) {
                // Create the YouTube player and generate embed code
                createYoutubePlayer(videoId);
            } else {
                // If invalid video ID, clear the YouTube player
                clearYoutubePlayer();
            }
        });

        // Function to clear the YouTube player
        function clearYoutubePlayer() {
            // Destroy the player if it exists
            if (player) {
                player.destroy();
            }
        }

        // Event listener for clearing the YouTube player
        document.getElementById('clear-button').addEventListener('click', function() {
            // Clear the input field
            document.getElementById('youtube-url').value = '';

            // Clear the YouTube player
            clearYoutubePlayer();
        });
    </script>






    <script src="https://www.youtube.com/iframe_api"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/cefc293317.js" crossorigin="anonymous"></script>
  </body>
</html>