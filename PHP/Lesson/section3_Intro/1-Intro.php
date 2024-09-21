<?php

// File PHP bao gồm text , html , css, js và code php.
// File PHP được thực thi ở phía Server và trả kết quả về trình duyệt ở dạng HTML


// Ngôn ngữ php làm đc gì:
// - PHP có thể làm thay đổi nội dung trang
// - PHP có thể thực hiện các thao tác liên quan đến file như mở, xóa, tạo file trên server
// - Có thể thao tác với data(thêm, sửa, xóa, cập nhật) khi kết hợp với Mysql
// - PHP có thể lưu lại thông tin của phiên người dùng với việc sử dụng session, cookie


// Bắt đầu bộ nhớ đệm đầu ra
ob_start();

// Ghi output vào bộ nhớ đệm
echo "Hello, world!";

// Kết thúc bộ nhớ đệm đầu ra và xóa nội dung
ob_end_clean();