<?php

function showArray($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (isset($_POST['btn_login'])) {
    $user_info = array(
        'username' => 'admin',
        'password' => '123456',
    );

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
        // check nhập đúng
        if ($username == $user_info['username'] && $password == $user_info['password']) {
            $redirect_to = $_POST['redirect_to'];
            echo $redirect_to;
            header("location: {$redirect_to}");
        } else {
            $error['login'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    } 
    if(!empty($error)){
        showArray($error);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ hidden field</title>
    </head>

    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Username: <input type="text" name="username" ><br>
            Password: <input type="password" name="password"><br>
            <input type="hidden" name="redirect_to" value="cart.php">
            <input type="submit" name="btn_login" value="Login"> 
        </form>
    </body>

</html>