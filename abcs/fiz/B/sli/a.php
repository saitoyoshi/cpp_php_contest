<?php

[$a,$b,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a >= $b) {
    echo 0 . PHP_EOL;exit;
}
$cnt = 0;
for ($i = 1; $i <= 1000000000; $i++) {
    $a *= $k;
    $cnt++;
    if ($a >= $b) {
        echo $cnt . PHP_EOL;exit;
    }
}
