<?php

/* Hàm bổ trợ
  - Số lượng đối số truyền vào: func_num_args()
  - Lấy danh sách các đối số truyền vào: func_get_args()
  - Lấy giá trị đối số hàm riêng lẻ: func_get_arg($arg_idx)
  
 */

#1 Tham số hàm tùy biến
function showArray($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

function sumMultiNumber() {
    echo "Có " . func_num_args() . " tham số.";
    echo "<br>";
    $a = func_get_arg(0);
    $b = func_get_arg(1);
    echo "a = {$a} <br> b = {$b}";

    // show mảng tham số
    $num_array = func_get_args();
    showArray($num_array);

    // tính tổng các tham số
    $t = 0;
    foreach ($num_array as $key => $value) {
        $t += $value;
    }
    echo "$t";
}

sumMultiNumber(2, 5, 8, 9); //output: 24
echo "<br>";

#2 Tham số hàm là mảng
$list_number = array(1, 2, 3);

function sumArray($list_number = array()) {
    if (is_array($list_number)) {
        $t = 0;
        foreach ($list_number as $key => $value) {
            $t += $value;
        }
    }
    echo $t;
}

sumArray($list_number); //output: 6

#3 Tham số hàm là mảng mà không cần phải khai báo mảng trước khi gọi hàm. 
echo"<br>";

function createInputText($name, $value, $option = array()) {
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if (!empty($option)) {
        $id = $option['id']; // không lỗi mà gán $id = null nếu id không tồn tại trong mảng option (null check)
        $class = $option['class'];
    }
    $input_html = "<input type = 'text' name = '{$name}' value = '{$value}' id = '{$id}' class = '{$class}'/>";
    echo $input_html;
}

createInputText('phantienmanh', '', $option = array('id' => 3, 'class' => 'form_input'));
