<?php 

include ('../config/db_funtion.php');

if (isset($_POST['saveuser'])) 
echo'input';
{
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $username = validate($_POST['username']);

    if($name != '' && $email != '' && $password !=''){
        $emailcheck = mysqli_query($conn, "SELECT * FROM life_user WHERE email='$email'");
        if($emailcheck){
            if(mysqli_num_rows($emailcheck) > 0) {
                redirect('create_user.php', 'อีเมลล์มีผู้ใช้แล้ว');
            }
        }

        $bcrypt_password = password_hash($password, PASSWORD_DEFAULT);

        $data =[

            'name' => $name,
            'email' => $email,
            'password' => $password,

        ];

        $result = insert ('user.php', $data);

        if($result) {
            redirect('user.php', 'เพิ่มข้อมูลสำเร็จ' );
        }
        else {
            redirect('create_user.php', 'เพิ่มข้อมูลไม่สำเร็จ');
        }
    }
    
    else {
        redirect('create_user.php', 'กรุณากรอกข้อมูลในช่อง');
    }

}

?>