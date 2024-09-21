<?php
//Trong PHP, để sử dụng biểu thức chính quy trong hàm preg_match(),
// bạn cần bọc biểu thức chính quy bằng dấu gạch chéo (/.../).


function is_username($username) {
//    Username bao gồm các ký tự chữ cái, chữ số, dấu gạch dưới, dấu chấm
//    Độ dài 6-32 ký tự
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/"; // ký hiệu / được sử dụng để bao quanh biểu thức chính quy
    if (preg_match($pattern, $username)) {
        return true;
    }
    return false;
}

function is_password($password) {
    $pattern = "/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/";
    if (preg_match($pattern, $password)) {
        return true;
    }
    return false;
}

function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field])) {
        return "<p class= 'error' style='font-size: 12px; color: #ed6161;'>{$error[$label_field]}</p>";
    }
}

function set_value($label_field) {
    global $$label_field;
//    $$label_field được sử dụng để truy cập vào biến mà tên của nó được lưu trong biến $label_field
    if (!empty($$label_field)) {
        return $$label_field;
    }
}

function is_email($password) {
    $pattern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($pattern, $password)) {
        return true;
    }
    return false;
}

function is_phone_number($number) {
    $pattern = "/^(09|08|01[2|6|8|9])(\d{8}$)/";
    if (preg_match($pattern, $number)) {
        return true;
    }
    return false;
}
