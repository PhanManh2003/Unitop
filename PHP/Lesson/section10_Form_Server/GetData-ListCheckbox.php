<?php
/* Dữ liệu đẩy lên server có key là name của nhóm checkbox
 * và value là 1 mảng .
 * 
 * 
 * [cat] => array(
 *      [0] => 1
 *      [1] => 2
 */


if (isset($_POST['btn_add'])) {
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";

    if (!empty($_POST['hobby'])) {
        # Cách xử lí 1
        foreach ($_POST['hobby'] as $value) {
            echo $value.'<br>';
        }
        
        # Cách xử lí 2
        $list_hobby = implode(',', $_POST['hobby']);
        echo $list_hobby;
    } else{
        echo "Bạn cần chọn sở thích";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ List checkbox</title>
    </head>

    <body>
        <h1>Chọn danh mục</h1>
        <form action="" method="POST">
            <input type="checkbox" name="hobby[]" value="1" id="hobby_1">
            <label for="hobby_1">Đá bóng</label><br>
            <input type="checkbox" name="hobby[]" value="2" id="hobby_2">
            <label for="hobby_2">Bơi lội</label><br>
            <input type="checkbox" name="hobby[]" value="3" id="hobby_3">
            <label for="hobby_3">Đạp xe</label><br><br>
            <input type="submit" name="btn_add" value="Thêm sở thích"> 
        </form>
    </body>

</html>
