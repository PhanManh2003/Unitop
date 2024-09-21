<?php

/*
 * checklist form thông tin bài viết
 * 1. tiêu đề bài viết (must)
 * 2. mô tả ngắn
 * 3. Nội dung
 * 4. Ảnh thumb
 *  */


?>


<?php
require 'lib/validation.php';
require 'lib/data.php';
require 'lib/template.php';
require 'data/post.php';
require 'data/product.php';
get_header();
?>

<?php
//Lấy dữ liệu page từ URL
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

//Tạo đường dẫn
$path = "pages/{$page}.php";

//Gọi file xử lí hiện tại
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
?>

<?php
get_footer();
?>