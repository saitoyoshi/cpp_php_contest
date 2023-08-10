<?php

[$N,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
$result = 0;
for ($i = 0; $i < $N; $i++) {
    $x -= $arr[$i];
    $result++;
    if ($x === 0) {
        break;
    }
    if ($x < 0) {
        $result--;
        break;
    }
}
if ($x > 0) {
    $result--;
}
echo $result . PHP_EOL;
