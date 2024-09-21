<?php
if (isset($_POST['btn_login'])) {
    $error = array(); // phất cờ
    if (empty($_POST['username'])) {
        // Hạ cờ
        $error['username'] = "Bạn cần nhập username";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }

    if (empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "Bạn cần nhập password";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            $password = $_POST['password'];
        }
    }


# Kết luận
    if (empty($error)) {
        // Xứ lí login
        if (check_login($username, $password)) {
            // Lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            // Check cookie
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $username, time() + 3600);
            }
            // Chuyển hướng vào trong hệ thống
            redirect_to('?page=home');
        } else {
            $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ĐĂNG NHẬP</title>
        <link href="public/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/login.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div id="wp-form-login">
            <h1 class="head-form-login">ĐĂNG NHẬP</h1>
            <form id="form-login" action="" method="POST" >
                <input type="text" name="username" id="username" value="" placeholder="Username" >
                <?php echo form_error('username') ?>
                <input type="password" name="password" id="password" value="" placeholder="Password">
                <?php echo form_error('password') ?>
                <input type="checkbox" name="remember_me" id="remember_me"><label for="remember_me">Ghi nhớ đăng nhập</label>
                <input type="submit" name="btn_login" value="Đăng nhập"> 
                <?php echo form_error('account') ?>
            </form>
            <a href="">Quên mật khẩu</a>
        </div>
    </body>
</html>
