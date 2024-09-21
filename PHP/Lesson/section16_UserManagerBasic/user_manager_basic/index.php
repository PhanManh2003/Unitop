<?php

session_start();
ob_start();
// Data 
require 'data/post.php';
require 'data/product.php';
require 'data/users.php';
// Function
require 'lib/users.php';
require 'lib/show_data.php';
require 'lib/template.php';
require 'lib/validation.php';
require 'lib/url.php'
?>

<?php

if (!empty($_COOKIE['is_login'])) {
    $_SESSION['is_login'] = $_COOKIE['is_login'];
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';
// Tạo đường dẫn
$path = "pages/{$page}.php";



//Kiểm tra login
if (!is_login() && $page != 'login') {
    redirect_to('?page=login');
}

//Gọi file xử lí hiện tại
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
?>


