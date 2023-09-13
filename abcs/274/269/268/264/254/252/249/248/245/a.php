<?php

$a = range(0,2000);
$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_unique($arr);
sort($arr);
for ($i = 0; $i < $N; $i++) {
    if ($arr[$i] !== $a[$i]) {
        echo $a[$i] . PHP_EOL;
        exit;
    }
}
echo $i . PHP_EOL;
