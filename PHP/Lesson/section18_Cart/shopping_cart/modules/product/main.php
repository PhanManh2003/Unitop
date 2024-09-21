<?php
$cat_id = (int)$_GET['cat_id'];
#BƯỚC 1: Lấy danh mục sản phẩm
$cat_info = get_cat_item($cat_id);
#BƯỚC 2: Lấy danh sách sản phẩm
$list_product_info = get_list_product_by_cat_id($cat_id);
// show_array($list_product_info);
#BƯỚC 3: Đổ dữ liệu
?>
<?php
get_header();
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $cat_info['cat_title']; ?></h3>
                    <p class="section-desc">Có <?php echo count($list_product_info); ?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_product_info)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php foreach ($list_product_info as $item) { ?>
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
            <!-- <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
get_footer();
?>