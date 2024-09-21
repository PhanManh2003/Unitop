<?php
// sử dụng hàm unset
$info = array(
    'id' => 1,
    'fullname' => 'Phan Tiến Mạnh',
    'email'    => 'manhamsterdam2003@',
    'facebook' => 'Phan Mạnh'
);
// Xóa phần tử $info['facebook']
unset($info['facebook']);
echo "<pre>";
print_r($info);


$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Tiến Mạnh',
        'email'    => 'manhamsterdam2003@',
    ),
    2 => array( 
        'id' => 2,
        'fullname' => 'Nguyễn Khả Tùng',
        'email'    => 'khatung1324@',
    ),
);
unset($list_user[2]['email']);
print_r($list_user);