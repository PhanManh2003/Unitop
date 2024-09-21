<?php
get_header();
?>
<?php
// get id từ url
$id = (int)$_GET['id'];
// Xây dựng hàm lấy dữ liệu
$item = get_page_item_by_id($id); // cần require lib/pages.php vô index.php để detail.php sử dụng dc hàm này
?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $item['page_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $item['created_at'] ?></p>
                    <div class="content-news">
                        <?php echo $item['page_content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>