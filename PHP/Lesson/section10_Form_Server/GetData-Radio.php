<?php
// b1: kiểm tra submit form
// b2: lấy dữ liệu

if(isset($_POST['btn_reg'])){
    if(empty($_POST['gender'])){
        echo "ko được để trống gender";
    } else{
        $gender = $_POST['gender'];
        echo $gender;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ radio button</title>
    </head>

    <body>
        <h1>Đăng nhập</h1>
        <form action="" method="POST">
            <input type="radio" name="gender" value="male" checked="checked">Nam<br>
            <input type="radio" name="gender" value="female" >Nữ<br>
            <input type="submit" name="btn_reg" value="Register"> 
        </form>
    </body>

</html>