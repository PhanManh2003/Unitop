<?php
// b1: kiểm tra submit form
// b2: lấy dữ liệu

if(isset($_POST['btn_login'])){
    if(empty($_POST['password'])){
        echo "ko được để trống password";
    } else{
        $username = $_POST['password'];
        echo $username;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ password</title>
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