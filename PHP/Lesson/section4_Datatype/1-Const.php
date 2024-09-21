<?php
define('MINSIZE', 50); // lưu lại giá trị kích thước file bé nhất
echo MINSIZE;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;

// Khi đặt tên hằng tránh sử dụng trùng tên với hằng hệ thống
# __LINE__    : Số dòng hiện tại khi gọi giá trị hằng 
# __FILE__    : Đường dẫn đến file được gọi hằng
# __DIR__     : Đường dẫn đến folder chứa file hiện hành 
# __CLASS__  : Lớp đc gọi trong lập trình OPP
# __METHOD__  : Phương thức đc gọi trong lập trình OPP
# __NAMESPACE__   : Tên NAMESPACE trong lập trình OPP


//  Phân biệt biến và hằng
// - Khai báo hằng ko cần $
// - Hằng ko nhận giá trị từ phép gán ngoại trừ hàm define()
// - Hằng truy cập dc từ mọi nơi
// - Hằng khi đã thiết lập thì ko thể định nghĩa lại HOẶC hủy bỏ