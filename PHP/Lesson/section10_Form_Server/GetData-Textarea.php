<?php
if (isset($_POST['btn_add'])) {
    if (empty($_POST['post_detail'])) {
        echo "Bạn cần nhập chi tiết bài viết";
    } else{
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ textarea</title>
    </head>

    <body>
        <h1>Thêm bài viết</h1>
        <form action="" method="POST">
            <label>Chi tiết</label><br>
            <textarea name="post_detail" cols="50" rows="10"></textarea><br>
            <input type="submit" name="btn_add" value="Thêm bài viết"> 
        </form>
    </body>

</html>
