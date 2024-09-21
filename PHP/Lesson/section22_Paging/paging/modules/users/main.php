<?php
get_header();
?>

<?php
//2. Lấy danh sách bản ghi trong bảng
// $sql = "SELECT * FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $list_users =  array();
// $num_rows = mysqli_num_rows($result); // số lượng bản ghi
// if ($num_rows > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_users[] = $row; // $row là 1 mảng 
//     }
// }



$num_rows = db_num_rows("SELECT * FROM `tbl_users` WHERE `gender` = 'male'");

$max_rows_per_page = 3;
$num_pages = ceil($num_rows / $max_rows_per_page);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_index = ($page - 1) * $max_rows_per_page;

// $list_users = db_fetch_array("SELECT * FROM `tbl_users` LIMIT {$start_index}, {$max_rows_per_page}");

$list_users = get_users($start_index, $max_rows_per_page, "`gender` = 'male'"); // Cách dùng hàm

foreach ($list_users as &$user) {
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}

?>
<div id="content">
    <a href="?mod=users&act=add" class="add-new">Thêm mới</a>
    <h1>Danh sách thành viên</h1>
    <?php
    if (!empty($list_users)) {
    ?>
        <table class=table-data>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Fullname</td>
                    <td>Email</td>
                    <td>Giới tính</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = $start_index;
                foreach ($list_users as $user) {
                    $temp++;
                ?>
                    <tr>
                        <td><?php echo $temp ?></td>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo show_gender($user['gender']) ?></td>
                        <td><a href="<?php echo $user['url_update'] ?>">Sửa</a> | <a href="<?php echo $user['url_delete'] ?>">Xóa</a></td>
                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
    <?php } ?>

    <?php
    echo get_paging($num_pages, $page, "?mod=users&act=main");
    ?>
    <!-- <ul class="paging">
        <li><a href="">Trước</a></li>
        <li class="active"><a href="?mod=users&act=main&page=1">1</a></li>
        <li><a href="?mod=users&act=main&page=2">2</a></li>
        <li><a href="?mod=users&act=main&page=3">3</a></li>
        <li><a href="?mod=users&act=main&page=4">4</a></li>
        <li><a href="?mod=users&act=main&page=2">Sau</a></li>
    </ul> -->
    <p class="num-rows">Có <?php echo $num_rows ?> thành viên trong hệ thống</p>
    <div class="clearfix"></div>


</div>

<?php
get_footer();
?>