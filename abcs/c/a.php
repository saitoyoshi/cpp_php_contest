<?php

$N = (int) trim(fgets(STDIN));
$s = decbin($N);
// var_dump($s);
$len = strlen($s);
$cnt = 0;
for ($i = $len-1; $i >= 0; $i--) {
    if ($s[$i] === '0') {
        $cnt++;
    } else {
        break;
    }
}

echo $cnt . PHP_EOL;
