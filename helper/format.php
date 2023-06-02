<?php 
function currency_format($number, $format_string = 'VND'){
    return number_format($number).$format_string;
}