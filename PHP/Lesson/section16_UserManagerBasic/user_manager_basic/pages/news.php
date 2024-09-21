<?php
get_header();
?>
<div id="content">
    <h1>Tin tức</h1>
    <ul>
        <?php
        if (!empty($list_post)) {
            foreach ($list_post as $item) {
                ?>
                <li>
                    <a href=""><?php echo $item['post_title'] ?></a>
                    <p><?php echo $item['post_desc'] ?></p>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>
<?php
get_footer();
?>