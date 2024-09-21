<?php

$file_url = 'uploads/cmnd.jpg';
// thêm @ vào trước hàm unlink để nếu có lỗi gì thì nó ko thông báo lên page
if (@unlink($file_url)) {
    echo "Xóa file {$file_url} thành công";
} else {
    echo "File {$file_url} không tồn tại trên server";
}
?>