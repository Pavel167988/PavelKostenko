<?php

function ndarray($n, $v) { // без рекурсии
$a = array_fill(0, $n, $v);
for ($i = 0; $i < $n - 1; $i++)
$a = array_fill(0, $n, $a);

return $a;
}

print_r(ndarray(3, 9));
//Заполнение масссива элементами
?>