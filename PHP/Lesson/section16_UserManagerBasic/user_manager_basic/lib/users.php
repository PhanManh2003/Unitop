<?php

function check_login($username, $password)
{
    global $list_users;
    foreach ($list_users as $user) { // foreach as value
        if ($user['username'] == $username && $user['password'] == md5($password)) {
            return true;
        }
    }
    return false;
}

// Trả về true nếu đã login
function is_login()
{
    if (isset($_SESSION['is_login'])) {
        return true;
    }
    return false;
}

// Trả về username của người login
function user_login()
{
    if (!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
    return false;
}

// Hiển thị thông tin user khi người user đó đăng nhập thành công (vd: fullname)
function user_info($field = 'fullname')
{
    global $list_users;
    if (is_login()) {
        foreach ($list_users as $user) {
            if ($user['username'] == $_SESSION['user_login']) {
                if (array_key_exists($field, $user)) {
                    return $user[$field];
                }
            }
        }
    }
    return false;
}
