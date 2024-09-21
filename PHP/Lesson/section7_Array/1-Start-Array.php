<?php

$myArray = array('key 1' => 'value1', 'key 1' => 'value1');
// key để phân biệt các phần tử mảng, value là giá trị phần tử mảng
// Chú ý: key được tạo nên bởi giá trị là chuỗi hoặc số nguyên 


//1. Mảng rỗng: dùng để chứa lỗi của data
$error = array();
$error['username'] = "Bạn không được để trống tên đăng nhập"; // Tạo phần tử riêng lẻ
echo "<pre>";
print_r($error);



//2. Tạo mảng key mặc định 
$list_even = array(2, 4, 5, 9, 1);  // key : 0,1,2,...


//3. Tạo mảng key xác định  (giống dictionary)
$info = array(
    'id' => 1,
    'fullname' => 'Phan Tiến Mạnh',
    'email'    => 'manhamsterdam2003@',
);

echo "<pre>";
print_r($info);
echo $info['fullname']; // lấy giá trị của key 'fullname'
// Tạo mảng