<?php
// Duyệt mảng 1 chiều
$list_prime = array(2,3,5,7);

$t = 0;
foreach ($list_prime as $key => $value) {
    echo $value."<br>";
    $t+= $value;
}

echo "Tổng: {$t}";

// Duyệt mảng 2 chiều
$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Tiến Mạnh',
        'email'    => 'manhamsterdam2003@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Khả Tùng',
        'email'    => 'khatung1234@gmail.com',
    ),
);

echo "<pre>";
foreach ($list_user as $key => $value) {
    echo $value['id']."<br>";
    echo $value['fullname']."<br>";
    echo $value['email']."<br>";
}