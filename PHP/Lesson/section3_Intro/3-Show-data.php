<?php
//=======================
// Xuất dữ liệu trong php
//=======================
#1. Xuất dữ liệu sau khi xử lí lên html: echo()
$a = 100;
echo "Giá trị của a: " . $a."$"; // nối chuỗi + biến
echo"<br>";
echo "Giá trị của a: {$a}$";
echo"<br>";
echo "Giá trị của a: $a$";

#2. Hiển thị dữ liệu mảng - sử dụng câu lệnh print_r()
$myArray = array('A', 'B', 'C');
echo "<pre>";
print_r($myArray);
echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xuất dữ liệu trong php</title>
    </head>

    <body>
        <style>
            
        </style>
        <h1>Xuất dữ liệu trên php</h1>
    </body>

</html>