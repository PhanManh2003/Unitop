<?php
// server nhận dữ liệu từ AJAX, xử lí và return với echo
$num_order = $_POST['num_order'];
$price = $_POST['price'];
$total = $num_order * $price;
$result = array(
    'price' => $price,
    'num_order' => $num_order,
    'total' => $total,
);
// Return: số, chuỗi, html, json 
// echo json_encode($result);
echo $total;


