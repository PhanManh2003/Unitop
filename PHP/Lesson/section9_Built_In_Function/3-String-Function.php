<?php

/* 9 hàm thông dụng
 * strlen
 * ucfirst  
 * trim
 * str_repeat
 * md5
 * join
 * implode (y hệt join)
 * explode (y hệt split)
 * htmlspecialchars: chuyển đổi các ký tự đặc biệt trong HTML thành các ký tự thích hợp để tránh lỗi cú pháp HTML hoặc cản trở các cuộc tấn công Cross-site Scripting (XSS). 
 */
$a = "phan tien manh";
echo ucfirst($a);

echo str_repeat("-", 10);

echo md5($a);
# join
$list_id = array(1, 3, 4, 5);
echo join("-", $list_id);

#implode
echo implode("_", $list_id);

echo htmlspecialchars("<a href='' > dfjkash </a>");
