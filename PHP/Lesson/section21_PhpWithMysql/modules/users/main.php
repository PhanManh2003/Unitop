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

$list_users = db_fetch_array("SELECT * FROM `tbl_users`");
$num_rows = db_num_rows("SELECT * FROM `tbl_users`");

$max_rows_per_page = 3;
$num_pages = ceil($num_rows / $max_rows_per_page);

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

foreach ($list_users as &$user) {
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}

?>
<div id="content">
    <style>
        .table-data thead tr td {
            font-weight: 700;
        }

        .table-data tr td {
            border-bottom: 1px solid #333;
            padding: 5px 10px;
        }
    </style>
    <a href="?mod=users&act=add" class="add-new">Thêm mới</a>
    <h1>Danh sách thành viên</h1>
    <?php
    if (!empty($list_users)) {
    ?>
        <div id="info">
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
                    $start_index = ($page - 1) * $max_rows_per_page;
                    $end_index = min($start_index + $max_rows_per_page, count($list_users));
                    $temp = $start_index + 1;

                    for ($i = $start_index; $i < $end_index; $i++) {
                        $user = $list_users[$i];
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
                        $temp++;
                    }
                    ?>
                </tbody>
            </table>
        <?php } ?>
        <p>Có <?php echo $num_rows ?> thành viên</p>
        </div>

        <div id="pagenavi-wp">
            <?php if ($num_pages > 1) {
            ?>
                <div id="list-pagenavi-div">
                    <ul id="list-pagenavi">
                        <?php
                        for ($i = 1; $i <= $num_pages; $i++) {
                            $active_class = ($i == $page) ? "active" : "";
                        ?>
                            <li>
                                <a href="?mod=users&act=main&page=<?php echo $i ?>" class="<?php echo $active_class ?>" title=""><?php echo $i ?></a>
                            </li>
                        <?php } ?>
                        <?php
                        if ($num_pages >= 2) {
                            $next = ($page < $num_pages) ? ($page + 1) : $num_pages;
                        ?>
                            <li>
                                <a href="?mod=users&act=main&page=<?php echo $next ?>" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                            </li>
                        <?php } ?>
                    </ul>

                </div>
            <?php } ?>
        </div>
</div>

<?php
get_footer();
?>