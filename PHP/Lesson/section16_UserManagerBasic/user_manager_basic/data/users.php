<?php

#Mảng data users
/*
Thông tin user:
  Id => id;
  Họ và tên => fullname
  Tên đăng nhập => username;
  Mật khẩu => password;
  Email => email;
 
 */

$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Phan Tiến Mạnh',
        'username' => 'manhalex2003',
        'password' => md5('Khongmotdoithu@96'),
        'email' => 'manhamsterdam2003@gmail.com',
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Phan Văn Cương',
        'username' => 'cuongguru',
        'password' => md5('guru!@#'),
        'email' => 'phancuong.qt@gmail.com',
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Nguyễn Phú Trọng',
        'username' => 'phutrong1944',
        'password' => md5('phutrong!@#'),
        'email' => 'phutrongnguyen@gmail.com',
    ),
);
