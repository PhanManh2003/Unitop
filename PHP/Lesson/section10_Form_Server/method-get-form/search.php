<?php
// xử lí GET ở file riêng
function showArray($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

showArray($_GET);

$q = $_GET['q'];
echo $q;
