<?php
$cat_id = (int)$_GET['cat_id'];
?>
<?php
get_header('product');
?>
<div id="content">
    <h1>Danh sách sản phẩm - Danh mục <?php echo $cat_id ?></h1>
</div>
<?php
get_footer();
?>