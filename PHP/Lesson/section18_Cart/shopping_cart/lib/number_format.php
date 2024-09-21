<?php

function currency_format($num, $unit = 'đ')
{
    return number_format($num, 0, '.', '.') . $unit;
}
