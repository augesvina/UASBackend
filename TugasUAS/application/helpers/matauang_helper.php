<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('matauang')) {
    function matauang($uang){
        $jumlah_uang = "Rp. " . number_format($uang,2,',','.');
        return $jumlah_uang;
    }
    

}


?>