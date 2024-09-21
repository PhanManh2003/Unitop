<?php
require 'lib/validation.php';

if (isset($_POST['btn_reg'])) {
    $error = array(); // phất cờ

    if (empty($_POST['fullname'])) {
        // Hạ cờ
        $error['fullname'] = "Bạn cần nhập fullname";
    } else {
        $fullname = $_POST['fullname'];
    }

    if (empty($_POST['username'])) {
        $error['username'] = "Bạn cần nhập username";
    } else {
        if (!is_username($_POST['username'])) {
            $error['username'] = "Username bao gồm các ký tự chữ cái, chữ số, dấu gạch dưới, dấu chấm";
        } else {
            $username = $_POST['username'];
        }
    }


    if (empty($_POST['password'])) {
        $error['password'] = "Bạn cần nhập password";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "Mật khẩu bao gồm các ký tự chữ cái, chữ số, ký tự đặc biệt, dấu chấm và bắt đầu bằng kí tự in hoa";
        } else {
            $password = md5($_POST['password']);
        }
    }



    if (empty($_POST['gender'])) {
        // Hạ cờ
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }


    // phone
    if (empty($_POST['phone'])) {
        $error['phone'] = "Bạn cần nhập SĐT";
    } else {
        if (!is_phone_number($_POST['phone'])) {
            $error['phone'] = "Số điện thoại không hợp lệ";
        } else {
            $phone = $_POST['phone'];
        }
    }


    // Kết luận
    if (empty($error)) {
        echo "Fullname: {$fullname} <br> Username: {$username} <br> Password: "
        . "{$password} <br> SĐT: {$phone}";
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
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
                font-style: italic;
            }
            label {display: block; margin-top: 15px}
            input[type ='text'] ,  input[type ='password'] {
                border: 1px solid #79b9e1;
                margin-bottom: 15px;
                padding: 5px 10px;
            }


        </style>

        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label>
            <input type="text" name="fullname" value="<?php echo set_value('fullname'); ?>" id="fullname"><br>
            <?php echo form_error('fullname') ?>

            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" value="<?php echo set_value('username'); ?>" id="username"><br>
            <?php echo form_error('username') ?>

            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password"><br>
            <?php echo form_error('password') ?>

            <label>Giới tính</label>
            <select name="gender">
                <option value="">--Chọn--</option>
                <option <?php if (!empty($gender) && $gender == 'male') echo "selected = 'selected'"; ?> value="male">Nam</option>
                <option <?php if (!empty($gender) && $gender == 'female') echo "selected = 'selected'"; ?> value="female">Nữ</option>
            </select>
            <?php echo form_error('gender') ?>

            <br><br>

            <label for="phone">SĐT</label>
            <input type="text" name="phone" id="phone" value=""<?php echo set_value('phone'); ?>"><br>
            <?php echo form_error('phone') ?>
            <input type="submit" name="btn_reg" value="Register" id="btn_reg"> 
        </form>
    </body>

</html>
