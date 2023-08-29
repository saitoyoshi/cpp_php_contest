<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = array_fill(1,max($arr), 0);
foreach ($arr as $v) {
    $bucket[$v]++;
}
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    [$cmd, $val] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        if (array_key_exists($val, $bucket)) {
            $bucket[$val]++;
        } else {
            $bucket[$val] = 1;
        }
    } elseif ($cmd === 1) {
        if (array_key_exists($val, $bucket)) {
            $bucket[$val] = 0;
        }
    } else {
        if (array_key_exists($val, $bucket)) {
            echo $bucket[$val] . PHP_EOL;
        }
    }
}
