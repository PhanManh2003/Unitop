<?php
# Lấy dữ liệu từ URL
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];

echo "{$mod}-{$act}-{$id}";
function showArray($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (isset($_GET['btn-search'])) {
    showArray($_GET);
    $q = $_GET['q'];
    echo $q;
}


/*
Khi nào sử dụng GET:
 * số lượng thông tin được gửi lên server được giới hạn (2000 kí tự)
 * dữ liệu public trên url
 * Những thông tin được truyền trên url có tác dụng cho bookmark, tốt cho SEO web */
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Truyền dữ liệu form bằng phương thức GET</title>
    </head>

    <body>
        <a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
        <h1>Tìm kiếm</h1>
        <form action="" method="GET">
            Tìm kiếm: <input type="text" name="q"><br>
            <input type="submit" name="btn-search" value="Search">
        </form>
    </body>

</html>
