<?php
require 'lib/redirect.php';
if (isset($_POST['btn_login'])) {


    $error = array();

    if (empty($_POST['username'])) {
        $error['username'] = "ko được để trống username";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "ko được để trống password";
    } else {
        $password = $_POST['password'];
    }

    // check nhập lỗi 
    if (empty($error)) {
        $user_info = array(
            'username' => 'admin',
            'password' => '123456',
        );
        // check nhập đúng
        if ($username == $user_info['username'] && $password == $user_info['password']) {
//            header("Location: index.php"); cách thông thường
            redirect_to('index.php');
        } else {
            echo "Tài khoản không tồn tại";
        }
    } else {
        echo "Không được để trống trường nào";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chuyển hướng file trong PHP</title>
    </head>

    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Username: <input type="text" name="username" ><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="btn_login" value="Login"> 
        </form>
    </body>

</html>