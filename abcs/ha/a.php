<?php

[$a,$b] = explode(" ", trim(fgets(STDIN)));
$a = (strrev($a));
$b = (strrev($b));
$len1 = strlen($a);
$len2 = strlen($b);
$len = min($len1, $len2);
for ($i = 0; $i < $len; $i++) {
    $a1 = (int)$a[$i];
    $b1 = (int)$b[$i];
    if ($a1+$b1 >= 10) {
        echo 'Hard' . PHP_EOL;exit;
    }
}
echo 'Easy' . PHP_EOL;
