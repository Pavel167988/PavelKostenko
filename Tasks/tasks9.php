<?php
    function strr($str){
        $arr = strrev($str);
        $arr2 = str_split($arr);
        print_r($arr2);
    }
    strr("ya pavel");
    //Футкция перевертыш строки
?>