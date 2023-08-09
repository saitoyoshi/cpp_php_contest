<?php

$divides = ["dream", "dreamer", "erase", "eraser"];
$reverseDivides = [];
foreach ($divides as $divide) {
    $reverseDivides[] = strrev($divide);
}
$S = trim(fgets(STDIN));
$S = strrev($S);
$can = true;

for ($i = 0; $i < strlen($S);) {
    $can2 = false;
    for ($j = 0; $j < 4; $j++) {
        $d = $reverseDivides[$j];
        if (substr($S,$i,strlen($d)) === $d) {
            $can2 = true;
            $i += strlen($d);
        }
    }
    if (!$can2) {
        $can = false;
        break;
    }
}
if ($can) {
    echo "YES" . PHP_EOL;
} else {
    echo "NO" . PHP_EOL;

}
