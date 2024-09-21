<?php
#2 Cập nhật mảng các sản phẩm trong giỏ hàng
// $_SESSION['cart']['buy'] = array(
//     1 => array(
//         'id' => 1,
//         'product_title' => 'A',
//         'price' => 1000,
//         'code' => 'UNI#1',
//         'product_thumb' => 'abc.jpg',  
//         'qty' => 1,
//         'sub_total' => 1000,
//     ),
// );
function add_cart($id)
{
    $item = get_product_by_id($id);
    $qty = 1;
    if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty =  $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'url' => "?mod=product&act=detail&id={$id}",
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'code' => $item['code'],
        'product_thumb' => $item['product_thumb'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty,
    );
    update_cart_info();
}

#3 Cập nhật mảng hóa đơn
function update_cart_info()
{
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
        $num_order += $item['qty'];
        $total += $item['sub_total'];
    }
    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total,
    );
}

// Lấy mảng giỏ hàng
function  get_list_product_cart()
{
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}


// Lấy mảng hóa đơn
function  get_cart_info()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
    return false;
}


// Lấy số lượng order trong cart
function get_cart_number()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}

// Lấy tổng giá tiền
function get_bill()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

// Xóa đơn hàng
function delete_cart($id)
{
    if (isset($_SESSION['cart'])) {
        #Xóa sản phẩm có $id trong giỏ hàng
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_cart_info();
        } else {
            unset($_SESSION['cart']);
        }
    }
}
