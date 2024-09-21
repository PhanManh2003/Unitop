<?php
require 'lib/template.php';
require 'lib/data.php';
require 'lib/url.php';
require 'lib/users.php';
require 'lib/validation.php';
require 'lib/paging.php';
// database
require 'db/config.php';
require 'db/database.php';
?>

<?php
db_connect($config);
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