<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = [];
for ($i = 1; $i <= $N; $i++) {
    $cnt = 0;
    for ($j = 0; $j < 7; $j++) {
        $cnt += $arr[($i-1) * 7 + $j];
    }
    $result[] = $cnt;
}
echo implode(" ", $result) . PHP_EOL;
