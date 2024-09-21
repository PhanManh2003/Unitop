<?php
ob_start();
session_start();
if (isset($_POST['btn_login'])) {
    $error = array(); // phất cờ


    if (empty($_POST['username'])) {
        // Hạ cờ
        $error['username'] = "Bạn cần nhập username";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "Bạn cần nhập password";
    } else {
        $password = $_POST['password'];
    }


// Kết luận
    if (empty($error)) {
        $data = array(
            'username' => 'admin',
            'password' => '123456'
        );
        if ($username == $data['username'] && ($password == $data['password'])) {
            // Trạng thái đăng nhập thành công được lưu vào mảng session
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = 'admin';
            redirect_to('index.php');
        } else {
            echo "Tài khoản không tồn tại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Session đăng nhập</title>
    </head>

    <body>
        <style>
            p.error{
                color: red;
            }
        </style>

        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" value="<?php if (!empty($username)) echo $username ?>" id="username"><br>
            <?php if (!empty($error['username'])) echo"<p class='error'>{$error['username']}</p>"; ?>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password"><br>
            <?php if (!empty($error['password'])) echo"<p class='error'>{$error['password']}</p>"; ?>
            <br><br>
            <input type="submit" name="btn_login" value="Đăng nhập" id="btn_reg"> 
        </form>
    </body>

</html>
