<?php 
if (isset($_POST['btn_update_cart'])) {
    show_array($_POST);
    foreach ($_POST['qty']  as $id => $new_qty) {
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $_SESSION['cart']['buy'][$id]['price'] * $new_qty;
    }
    update_cart_info();
}
redirect_to('?mod=cart&act=show');