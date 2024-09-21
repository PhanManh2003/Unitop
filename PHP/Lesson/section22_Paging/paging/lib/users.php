<?php
function show_gender($key)
{
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
    if (array_key_exists($key, $list_gender)) {
        return $list_gender[$key];
    }
}

function get_users($start_index = 1, $max_rows_per_page = 10, $where = "")
{
    if (!empty($where)) $where = "WHERE {$where}";
    $list_users = db_fetch_array("SELECT * FROM `tbl_users` {$where} LIMIT {$start_index}, {$max_rows_per_page}");
    return $list_users;
}
