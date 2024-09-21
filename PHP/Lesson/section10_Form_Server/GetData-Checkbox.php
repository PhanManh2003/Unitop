<?php
// b1: kiểm tra submit form
// b2: lấy dữ liệu

if (isset($_POST['btn_reg'])) {
    if (isset($_POST['rules'])) {
        $rules  = $_POST['rules'];
        echo $rules;
    } else {
        // Báo lỗi chưa check ô đồng ý
        echo "Vui lòng xác nhận điều khoản";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ checkbox</title>
    </head>

    <body>
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <p style="width: 400px; height: 100px; overflow: scroll;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <input type="checkbox" name="rules" value="yes" id="rules">
            <label for="rules">Đồng ý</label><br><br>
            <input type="submit" name="btn_reg" value="Register"> 
        </form>
    </body>

</html>