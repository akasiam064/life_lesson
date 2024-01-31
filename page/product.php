<?php

require_once("../Backend/backend/php/config/condb.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="/css/product_one.css">
    <title>Life Lessons | Product</title>
</head>
<body>


      <?php
    $sql = "SELECT * FROM life_book";
    $all_data = mysqli_query($conn, $sql);

?>



<?php foreach ($all_data as $data) : ?>
    
    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                    <img src="<?= $data['Image_URL_Sec1'];?>">
                </div>
                
            </div>
            <div class="basic-info">
                <h1><?= $data['name']; ?></h1>
            </div>
            <div class="description">
                <p><?= $data['detail']; ?></p>

                <?php endforeach; ?>
                <button class="button">ย้อนกลับ</button>

            </div>
        </div>
    </div>

    <script>
        const button = document.querySelector(".button");
        button.addEventListener("click", (e) => {
          e.preventDefault;
          button.classList.add("animate");
          setTimeout(() => {
            button.classList.remove("animate");
          }, 600);
        });
      </script>
</body>
</html>