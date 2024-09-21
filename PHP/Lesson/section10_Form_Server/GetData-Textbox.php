<?php
// b1: kiểm tra submit form
// b2: lấy dữ liệu

if(isset($_POST['btn_login'])){
    if(empty($_POST['username'])){
        echo "ko được để trống username";
    } else{
        $username = $_POST['username'];
        echo $username;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ textbox</title>
    </head>

    <body>
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            Username: <input type="text" name="username" ><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="btn_login" value="Login"> 
        </form>
    </body>

</html>