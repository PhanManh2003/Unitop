<?php
$sent_to_email ="manhamsterdam2024@gmail.com";
$sent_to_fullname ="Mạnh24";
$subject ="Thông tin đơn hàng";
$content ="Cảm ơn bạn đã xem sản phẩm";
send_mail($sent_to_email, $sent_to_fullname, $subject, $content);
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