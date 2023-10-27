<?php

[$n,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
array_unshift($arr,0);
$cnt = 0;
$sum = 0;
foreach ($arr as $v) {
    $sum += $v;
    if ($sum <= $x) {
        $cnt++;
    }
}
echo  $cnt .PHP_EOL;
