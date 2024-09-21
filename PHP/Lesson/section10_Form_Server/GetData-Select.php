<?php

if (isset($_POST['btn_order'])) {
    if (empty($_POST['pay_method'])) {
        echo "Vui lòng chọn hình thức thanh toán";
    } else {
        $pay_method = $_POST['pay_method'];
        echo $pay_method;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lấy dữ liệu form từ select box</title>
    </head>

    <body>
        <h1>Đặt hàng</h1>
        <form action="" method="POST">
            <select name="pay_method">
                <option value="">--Chọn--</option>
                <option value="cod">Thanh toán tại nhà</option>
                <option value="banking">Thanh toán qua thẻ tín dụng</option>
            </select>
            <input type="submit" name="btn_order" value="Đặt hàng"> 
        </form>
    </body>

</html>
