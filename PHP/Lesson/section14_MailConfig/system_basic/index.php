<?php

/*
  Ý tưởng hệ thống điều hướng:
  -	File giao diện dùng chung
  -	Hàm dùng chung

  Checklist:
  1.	Đẩy yêu cầu truy cập lên URL
  <a href = “?page=contact”>Liên hệ</a>
  <a href = “?page=product”>Sản phẩm</a>

  2.	Lấy dữ liệu page từ URL
  $page = $_GET[‘page’];
 
  3.	Tạo đường dẫn
  $path = “pages/{$page}.php”;
  4.	Gọi file xử lí hiện tại
  require($path);
 */
?>


<?php
require 'config/email.php';
require 'lib/template.php';
require 'lib/email.php';
require 'data/post.php';
require 'data/product.php';
get_header();
?>

<?php
// Mỗi khi người dùng truy cập vào trang chủ thì nó sẽ gửi mail 

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