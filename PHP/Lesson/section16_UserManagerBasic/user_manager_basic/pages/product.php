<?php
get_header();
?>
<div id="content">
    <h1>Sản phẩm</h1>
    <ul>
        <?php
        if (!empty($list_product)) {
            foreach ($list_product as $item) {
                ?>
                <li>
                    <a href=""><?php echo $item['prod_name'] ?></a>
                    <p><?php echo $item['prod_price'] ?></p>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>
<?php
get_footer();
?>