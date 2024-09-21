<?php 
// Get data from Ajax
$qty = $_POST['qty'];
$id = $_POST['id'];


$item = get_product_by_id($id);
if (isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']['buy'])) {
    // Update server data
    $_SESSION['cart']['buy'][$id]['qty'] = $qty;
    $_SESSION['cart']['buy'][$id]['sub_total'] = $qty * $item['price'];
    update_cart_info();

    // Return data to Ajax
    $result = array(
        'sub_total' => currency_format($_SESSION['cart']['buy'][$id]['sub_total']),
        'total' => currency_format(get_bill()),
    ); 
    echo json_encode($result);
}


