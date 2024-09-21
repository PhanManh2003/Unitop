<?php

// bài 1
function check_even($n) {
    if ($n % 2 == 0) {
        echo "Chẵn";
        return true;
    } else {
        echo "Lẻ";
        return false;
    }
}

// bài 2: tính tổng các số nguyên tố từ 2 -> n
function checkPrime($n) {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function totalPrime($n) {
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (checkPrime($i)) {
            $t += $i;
        }
    }
    return $t;
}

echo totalPrime(6);

// bài 3: Hàm lấy thông tin chi tiết một bài viết theo id trong mảng bài viết
$list_post = array(
    1 => array(
        "id" => 1,
        "post_title" => "Bài viết 1",
        "post_content" => "Chi tiết bài viết 1",
        "post_desc" => "Mô tả ngắn bài viết 1",
        "cat_id" => 1
    ),
    2 => array(
        "id" => 2,
        "post_title" => "Bài viết 2",
        "post_content" => "Chi tiết bài viết 2",
        "post_desc" => "Mô tả ngắn bài viết 2",
        "cat_id" => 2
    )
);

function getPostById($id) {
  /*  từ khóa global trong PHP được sử dụng để truy cập 
các biến toàn cục từ bên trong một hàm mà không cần truyền chúng qua tham số */
    global $list_post; 
    if(array_key_exists($id, $list_post)){
        return $list_post[$id];
    }
    return false;
}

$post = getPostById(2);
echo "<pre>";
print_r($post);
echo "</pre>";
