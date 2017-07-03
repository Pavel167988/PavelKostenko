<?php
function arr_vivod ($arr){
    if (is_array($arr)){
        arr_vivod2($arr);
    }
    else {
        echo "Eto ne massiv!";
    }
    return $arr;

}
function arr_vivod2 ($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }




    arr_vivod(array ("Home" , "Page" , "Insert"));

//Задача пока без 3 функции(табуляции)!
?>