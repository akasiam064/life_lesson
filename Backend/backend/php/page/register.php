<?php 

    session_start();
    require_once '../config/connection.php';

    if (isset($_POST['signup']))  {

        $email = $_POST ['email'];
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $urole = 'user';
     
        // if (empty( $username)) {
        //     $_SESSION['error'] = 'กรุณากรอก username';
        // //    header("location: ../page/register.php");

        // } elseif (!filter_var( $email , FILTER_VALIDATE_EMAIL)) {
        //     $_SESSION['error'] = 'รูปแบบ email ไม่ถูกต้อง';
        // //    header("location: ../page/register.php");

        // } elseif (empty($password)) {
        //     $_SESSION['error'] = 'กรุณากรอก password';
        // //    header("location: ../page/register.php");

        // }  elseif (empty($email)) {
        //     $_SESSION['error'] = 'กรุณากรอก email';
        // //    header("location: ../page/register.php");

        // } else {

            try {

                $check_email = $conn->prepare("SELECT email FROM life_user WHERE email = :email");
                $check_email->bindParam(":email" , $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);
                //echo $row;
                if ($row['email'] == $email) {
                    $_SESSION['error'] = 'มี email ในระบบแล้ว';
                   // header("location: ../page/register.php");

                } elseif (!isset($_SESSION['error'])) {

                    $passwordHasd = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO life_user(email, username, password, urole) 
                                            VALUES(:email, :username, :password, :urole)");
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":username", $username);
                    $stmt->bindParam(":password", $password);
                    $stmt->bindParam(":urole", $urole);
                    $result =$stmt->execute();
                    echo $result ;
                    $_SESSION ['success'] = "สมัครสมาชิกเรียบร้อย";
                  //  header("location: ../page/login.php");
                }

            }    catch (PDOException $e) {
                echo $e->getMessage();
            }
        // }

    }
?>