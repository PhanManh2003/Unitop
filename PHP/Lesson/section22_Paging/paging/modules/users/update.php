<?php
get_header();
?>

<?php
//3. Lấy 1 bản ghi trong bảng 
$id = (int)$_GET['id'];
// $sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id";
// $result = mysqli_query($conn, $sql);
// $item = mysqli_fetch_assoc($result);
// show_array($item);
?>

<?php
require 'lib/validation.php';

if (isset($_POST['btn_update'])) {
    $error = array(); // phất cờ
    $alert = array();
    if (empty($_POST['fullname'])) {
        // Hạ cờ
        $error['fullname'] = "Bạn cần nhập fullname";
    } else {
        $fullname = $_POST['fullname'];
    }

    if (empty($_POST['gender'])) {
        // Hạ cờ
        $error['gender'] = "Bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }

    // Kết luận
    if (empty($error)) {
        // 4 Cập nhật bản ghi
        // $sql = "UPDATE `tbl_users` SET `fullname` = '{$fullname}', `gender` = '{$gender}' WHERE `user_id` = $id";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "Cập nhật dữ liệu thành công";
        // } else {
        //     echo "Lỗi: " . mysqli_error($conn);
        // }

        $data = array(
            'fullname' => $fullname,
            'gender' => $gender,
        );
        db_update('tbl_users', $data, "`user_id` = $id");
    }
}
// $sql = "SELECT * FROM `tbl_users` WHERE `user_id` = $id";
// $result = mysqli_query($conn, $sql);
// $item = mysqli_fetch_assoc($result);

$item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = $id");

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
    <h1>Cập nhật</h1>
    <?php
    if (!empty($alert['success'])) {
    ?>
        <p class="success"><?php echo $alert['success'] ?></p>
    <?php
    }
    ?>
    <form action="" method="post">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" value="<?php if (!empty($item['fullname'])) echo $item['fullname']  ?>" id="fullname"><br>
        <?php echo form_error('fullname') ?>

        <label>Giới tính</label>
        <select name="gender">
            <option value="">--Chọn--</option>
            <option <?php if (!empty($item['gender']) && $item['gender'] == 'male') echo "selected = 'selected'"; ?> value="male">Nam</option>
            <option <?php if (!empty($item['gender']) && $item['gender'] == 'female') echo "selected = 'selected'"; ?> value="female">Nữ</option>
        </select>
        <?php echo form_error('gender') ?>
        <br><br>
        <input type="submit" name="btn_update" value="Cập nhật" id="btn_update">
    </form>
</div>


<?php
get_footer();
?>