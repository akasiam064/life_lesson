<?php 

    include_once '../comment/retinepost.php';

    $com = new Comment();

    echo'new';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        

        if (empty($name) || empty($comment)) {
            echo "<span style='color: red; font-size: 20px;'>Field must not be empty</span>";
        } else {
            $com->setData($name, $comment);
            if ($com->create()) {
                header('Location: ../comment/comment.php?');
            }
        }
    }

?>