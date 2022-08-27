<?php

if (! function_exists('format_number')) {
    function format_number($number, $currency = 'PEN')
    {
        
        if($currency == 'PEN') {
            return number_format($number, 2, '.', ',');
        }
        
        return number_format($number, 0, '.', '.');

    }
}

