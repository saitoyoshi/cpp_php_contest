<?php

$k = (int) trim(fgets(STDIN));
[$a,$b] = explode(" ", trim(fgets(STDIN)));
echo convertDec($a,$k) * convertDec($b,$k) . PHP_EOL;;
function convertDec($n,$k) {
    $len = strlen($n);
    $res = 0;
    for ($i = 0; $i < $len; $i++) {
        $num = (int)$n[$i];
        $res += $k ** ($len-1-$i) * $num;
    }
    return $res;
}
