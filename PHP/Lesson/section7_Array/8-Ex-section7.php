<?php
#Bài 1
//$odd_num = array();
//for ($i = 3; $i <= 150; $i++) {
//    if($i % 2 == 1) $odd_num[] = $i;
//}
//
//echo "<pre>";
//print_r($odd_num);
#Bài 2: tạo mảng lưu trữ thông tin bài viết
$list_post_cat = array(
    1 => array(
        "cat_id" => 1,
        "cat_title" => "Xã hội",
    ),
    2 => array(
        "cat_id" => 2,
        "cat_title" => "Thể thao",
    ),
);

$list_post = array(
    1 => array(
        "id" => 1,
        "post_title" => "Bài viết 1",
        "post_content" => "Chi tiết bài viết 1",
        "post_desc" => "Mô tả ngắn bài viết 1",
        "cat_id" => 1
    ),
    2 => array(
        "id" => 2,
        "post_title" => "Bài viết 2",
        "post_content" => "Chi tiết bài viết 2",
        "post_desc" => "Mô tả ngắn bài viết 2",
        "cat_id" => 2
    )
);

#3 Hiển thị danh sách bài viết lên giao diện
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Danh sách bài viết</title>
    </head>

    <body>
        <h1>Danh sách bài viết</h1>
        <ul>
            <?php
            if (!empty($list_post)) {
                foreach ($list_post as $item) {
                    ?>
                    <li>
                        <a href=""><?php echo $item['post_title'] ?></a>
                        <p><?php echo $item['post_desc'] ?></p>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </body>

</html>
