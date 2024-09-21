<?php 
function show_gender($key){
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
    if (array_key_exists($key,$list_gender)) {
        return $list_gender[$key];
    }
}