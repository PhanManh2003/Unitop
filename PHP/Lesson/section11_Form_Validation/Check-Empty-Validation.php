<?php
/*
  THUẬT TOÁN THÔNG BÁO LỖI NHẬP LIỆU
 * Bước 1: Phất cờ
 *    - mặc định hệ thống không có lỗi
 *    - thiết lập giá trị mặc định: $error = 0/ $error = false/ $error = array()
 * 
 * Bước 2: Hạ cờ
 *    - Khi hệ thống phát hiện lỗi
 *    - thiết lập: $error = 1/ $error = true/ $error['username'] = "ko dc để trống";
 * 
 * Bước 3: Kết luận
 *   if(empty($error)){
 *          // Xử lí khi không có lỗi
 *   } else {
 *      // Xử lí khi có lỗi
 *   }    
 *  
 */



if (isset($_POST['btn_reg'])) {
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

    if (empty($_POST['gender'])) {
        // Hạ cờ
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    // Kết luận
    if (empty($error)) {
        echo "Username: {$username} <br> Password: {$password} <br> {$gender}";
    } else {
//        echo "<pre>";
//        print_r($error);
//        echo "</pre>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chuẩn hóa dữ liệu form</title>
    </head>

    <body>
        <style>
            p.error{
                color: red;
            }
        </style>

        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" value="<?php if (!empty($username)) echo $username ?>" id="username"><br>
            <?php if (!empty($error['username'])) echo"<p class='error'>{$error['username']}</p>"; ?>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password"><br>
            <?php if (!empty($error['password'])) echo"<p class='error'>{$error['password']}</p>"; ?>

            <label>Giới tính</label>
            <select name="gender">
                <option value="">--Chọn--</option>
                <option <?php if (!empty($gender) && $gender == 'male') echo "selected = 'selected'"; ?> value="male">Nam</option>
                <option <?php if (!empty($gender) && $gender == 'female') echo "selected = 'selected'"; ?> value="female">Nữ</option>
            </select>
            <?php if (!empty($error['gender'])) echo"<p class='error'>{$error['gender']}</p>"; ?>
            
            <br><br>
            <input type="submit" name="btn_reg" value="Register"> 



        </form>
    </body>

</html>
