<?php
function stroka($str)
{
    $len = strlen($str);
// посимвольный вывод строки
    for ($i = 0; $i <= $len; $i++) {
        echo $str[$i];
        echo "<br>";
    }
}
stroka ("PAVEL KOSTENKO");
?>