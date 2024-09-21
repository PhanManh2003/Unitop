<?php
// Mảng đa chiều là mảng chứa key-value mà value ở dạng mảng
$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Tiến Mạnh',
        'email'    => 'manhamsterdam2003@',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Khả Tùng',
        'email'    => 'manhamsterdam2222@',
    ),
);

// thêm phần tử cho mảng đa chiều: cách 1
$list_user[3] = array(
    'id' => 3,
    'fullname' => 'Phan Văn Cương',
    'email'    => 'manhamsterdam1111@',
);

// thêm phần tử cho mảng đa chiều: cách 2
$list_user[4]['id'] = 4;
$list_user[4]['fullname'] = 'Ronaldo';
$list_user[4]['email'] = 'cr7@gmail.com';

echo "<pre>";
print_r($list_user);


// Lấy phần tử mảng đa chiều
$info_cr7 = $list_user[4];
echo "<pre>";
print_r($info_cr7);