<?php 

    session_start();
    require_once '../config/connection.php';

    if (isset($_GET['signin'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        echo $username;

      
        if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอก username';
            header("location: ../page/login.php");
        }  else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: ../page/login.php");
        }  else {

            try {
                echo $username;
                $check_data = $conn->prepare("SELECT * FROM life_user WHERE username = :username");
                $check_data->bindParam(":username", $username);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount() > 0) {

                    if ($username == $row['username']) {
                        
                        if ($password==$row['PASSWORD']) {
                            if ($row['urole'] == 'admin') {
                                $_SESSION['admin_login'] = $row['id'];
                                header("location: /backend/backend/index.php");
                            } else {
                                $_SESSION['user_login'] = $row['id'];
                                header("location: http://127.0.0.1/index.html");
                            }
                        } else {
                            

                            $_SESSION['error'] = 'รหัสผ่านผิด';
                            header("location: ../page/login.php");
                        }
                    } else {
                        $_SESSION['error'] = 'อีเมลผิด';
                        header("location: ../page/login.php");
                    }
                } else {
                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
                    header("location: ../page/login.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>