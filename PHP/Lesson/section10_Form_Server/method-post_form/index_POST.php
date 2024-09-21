<?php
// xử lí POST ở file hiện tại ( cần phải kiểm tra submit form hay chưa)
function showArray($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// Kiểm tra đã submit form hay chưa và lấy dữ liệu form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "{$username} - {$password}";
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Truyền dữ liệu form bằng phương thức post</title>
    </head>

    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            Name: <input type="text" name="username" ><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="btn-login" value="Login"> 
        </form>
    </body>

</html>