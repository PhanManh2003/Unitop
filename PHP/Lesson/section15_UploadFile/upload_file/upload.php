<?php

require 'lib/data.php';

// Hiển thị dữ liệu về tệp tin tải lên
show_array($_FILES);

// Thư mục lưu trữ tệp tin tải lên
$upload_dir = 'uploads/';

// Đường dẫn của tệp tin sau khi tải lên
$upload_file = $upload_dir . $_FILES['file']['name'];

// Di chuyển tệp tin từ thư mục tạm thời đến thư mục lưu trữ
if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
    echo "<a href='{$upload_file}'>Download {$_FILES['file']['name']}</a>";
} else {
    echo "Tải lên tệp tin không thành công";
}
?>
