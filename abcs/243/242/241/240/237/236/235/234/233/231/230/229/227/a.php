<?php

$N = (int) fgets(STDIN);
$S = array_map('intval',explode(" ", trim(fgets(STDIN))));

$candidate = [];
for ($i = 1; $i <= 1000; $i++) {
    for ($j = 1; $j <= 100; $j++) {
        $s = 4*$i*$j + 3*$i+3*$j;
        if ($s > 1000) {
            break;
        }
        $candidate[] = $s;
    }
}
// var_dump($candidate);
$cnt = 0;
foreach ($S as $v) {
    if (!in_array($v,$candidate)) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
