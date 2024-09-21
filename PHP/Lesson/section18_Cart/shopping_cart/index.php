<?php
/*
Checklist xây dựng hệ thống điều hướng nâng cao
1. Đẩy yêu cầu truy cập lên URL
 <a href = "?mod=product&act=main&id=1">Máy tính</a>
 <a href = "?mod=product&act=main&id=2">Điện thoại</a>

2. Lấy dữ liệu từ URL
    $mod = $_GET['mod'];
    $act = $_GET['act'];
3. Tạo đường dẫn
    $path = "modules/{$mod}/{$act}.php;
4. Gọi file xử lí hiện tại
    require($path);
*/

//detail.php chỉ chứa trang đơn , còn main.php chứa các trang gồm nhiều trang con
?>

<?php
session_start();
ob_start();
#Thư viện hàm
require 'lib/template.php';
require 'lib/data.php';
require 'lib/pages.php';
require 'lib/products.php';
require 'lib/number_format.php';
require 'lib/cart.php';
require 'lib/url.php';
#Dữ liệu
require 'data/pages.php';
require 'data/products.php';
?>

<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
//Tạo đường dẫn
$path = "modules/{$mod}/{$act}.php";

//Gọi file xử lí hiện tại
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
?>