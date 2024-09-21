<?php

function is_username($username) {
//    Username bao gồm các ký tự chữ cái, chữ số, dấu gạch dưới, dấu chấm
//    Độ dài 6-32 ký tự
    $parttern = "/^[A-Za-z0-9_\.]{6,32}$/"; // ký hiệu / được sử dụng để bao quanh biểu thức chính quy
    if (preg_match($parttern, $username))
        return true;
    return false;
}

function is_password($password) {
//    Mật khẩu bao gồm các ký tự chữ cái, chữ số, ký tự đặc biệt, dấu chấm
//    Bắt đầu bằng ký tự in hoa
//    Độ dài 6-32 ký tự
    $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($parttern, $password))
        return true;
    return false;
}

function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field]))
        return "<p style='color: red;'>{$error[$label_field]}</p>";
}

function set_value($label_field) {
    global $$label_field;
//    $$label_field được sử dụng để truy cập vào biến mà tên của nó được lưu trong biến $label_field
    if (!empty($$label_field))
        return $$$label_field;
}

function is_email($password) {
    $parttern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($parttern, $password))
        return true;
    return false;
}

function is_phone_number($number) {
    $number = "/^(09|08|01[2689])\d{7}$/";
    if (preg_match($parttern, $number))
        return true;
    return false;
}
