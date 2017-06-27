<?php
function pr_num($n){
        if($n==1 or $n==0)return false;
        for($d=2; $d*$d<=$n; $d++)
        {
        if($n%$d==0)return false;
        }
        return true;
}
$count=0;
$i=48;
while ($i>-74) {
    if (pr_num($i))
        $count++;
        $i -= 4;
        echo $i;

}
//Нахождение простых чисел, в данном диапозоне их нет.
?>