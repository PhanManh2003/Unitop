<?php
get_header();
?>
<?php
// Lấy danh sách sản phẩm
$list_mobile = get_list_product_by_cat_id(1);
$list_macbook = get_list_product_by_cat_id(2);

// Lấy cat_info
$cat_info_mobile = get_cat_item(1);
$cat_info_macbook = get_cat_item(2);
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $cat_info_mobile['url'] ?>"><?php echo $cat_info_mobile['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php

                    if (!empty($list_mobile)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_mobile as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price']) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $cat_info_macbook['url'] ?>"><?php echo $cat_info_macbook['cat_title'] ?></a>
                </div>
                <div class="section-detail">
                    <?php

                    if (!empty($list_macbook)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_macbook as $item) { ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price']) ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>