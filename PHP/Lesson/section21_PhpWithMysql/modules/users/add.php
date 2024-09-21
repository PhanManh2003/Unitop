<?php
get_header();
?>
<?php
require 'lib/validation.php';

if (isset($_POST['btn_reg'])) {
    $error = array(); // phất cờ
    $alert = array();
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



    if (empty($_POST['email'])) {
        $error['email'] = "Bạn cần nhập email";
    } else {
        if (!is_email($_POST['email'])) {
            $error['email'] = "Email không đúng định dạng";
        } else {
            $email = $_POST['email'];
        }
    }


    // Kết luận
    if (empty($error)) {
        // 1. Thêm dữ liệu form vào database
        // $sql = "INSERT INTO `tbl_users` (`username`,`fullname`,`email`,`password`,`gender`) 
        // VALUES ('{$username}','{$fullname}','{$email}','{$password}','{$gender}')";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "Thêm dữ liệu thành công";
        // } else {
        //     echo "Lỗi: " . mysqli_error($conn);
        // }

        $data = array(
            'fullname' => $fullname,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'gender' => $gender,
        );
        $id_insert = db_insert('tbl_users',$data);
        echo $id_insert;
    } else {
        // echo "<pre>";
        // print_r($error);
        // echo "</pre>";
    }
}
?>
<style>
    p.error {
        color: red;
        font-style: italic;
    }

    label {
        display: block;
        margin-top: 5px
    }

    input[type='text'],
    input[type='password'],
    input[type='email'] {
        border: 1px solid #79b9e1;
        margin-bottom: 5px;
        padding: 5px 10px;
    }

    input[type='submit'] {
        display: block;
        width: 185px;
        background: #e0a15a;
        border: none;
        padding: 5px 0px;
        font-size: 15px;
        cursor: pointer;
        text-transform: uppercase;
    }

    p.success {
        color: #12881a;
    }
</style>
<div id="content">
    <h1>Thêm mới</h1>
    <?php
    if (!empty($alert['success'])) {
    ?>
        <p class="success"><?php echo $alert['success'] ?></p>
    <?php
    }
    ?>
    <form action="" method="post">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" value="<?php echo set_value('fullname'); ?>" id="fullname"><br>
        <?php echo form_error('fullname') ?>

        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" id="username"><br>
        <?php echo form_error('username') ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo set_value('email'); ?>" id="email"><br>
        <?php echo form_error('email') ?>

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
        <input type="submit" name="btn_reg" value="Register" id="btn_reg">
    </form>
</div>


<?php
get_footer();
?>