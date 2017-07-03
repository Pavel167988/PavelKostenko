<?php
    function str_gl($text){
        $glasnieangl = preg_replace ("/[aeiouAEIOU]/", "", $text);
        $count= strlen($text)-strlen($glasnieangl);
        $arr = str_split($glasnieangl);

        print_r($arr);
        echo "<br>Kolichestvo glasnih = ".$count;
    }
str_gl("Pavel Kostenko");
?>