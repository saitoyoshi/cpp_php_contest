<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = array_sum($arr);
$d = $sum / (4*$M);
$cnt = count(array_filter($arr,fn($v) => $v >= $d));
if ($M <= $cnt) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
