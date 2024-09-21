<?php
# Hàm lấy dữ liệu page theo id
/* Trả về mảng thông tin trang tương ứng */
function get_page_item_by_id($id)
{
    global $list_page; // cần require data/pages.php vô index.php để hàm get_page_by_id hoạt động được với $list_page
    if (array_key_exists($id, $list_page)) {
        return $list_page[$id];
    }
    return false;
}
