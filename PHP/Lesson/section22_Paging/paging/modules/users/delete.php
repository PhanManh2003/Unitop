<?php
$id = (int)$_GET['id'];

// $sql = "DELETE FROM `tbl_users` WHERE `user_id` = $id";
// if (mysqli_query($conn, $sql)) {
//     echo "Xóa thành công";
// } 

db_delete('tbl_users', "`user_id` = $id");

redirect_to("?mod=users&act=main");
