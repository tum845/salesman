<?php
namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: FAOZI
 * Date: 9/9/2017
 * Time: 7:17 PM
 */

class RupiahHelper
{
    public static function view_rp($number){
        $result = "Rp " . number_format($number,2,',','.');
        return $result;
    }

}