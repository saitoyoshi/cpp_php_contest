<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
for ($i = 0; $i < $N-1; $i++) {
    if ($arr[$i+1] - $arr[$i] === 2) {
        echo $arr[$i] + 1 . PHP_EOL;
        exit;
    }
}
