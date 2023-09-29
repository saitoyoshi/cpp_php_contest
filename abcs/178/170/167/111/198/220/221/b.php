<?php

$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
if ($s === $t) {
    echo 'Yes' . PHP_EOL;
    exit;
}
solve($s,$t);
function solve($s,$t) {
    for ($i = 0; $i < strlen($s)-1; $i++) {
        [$s[$i],$s[$i+1]] = [$s[$i+1],$s[$i]];
        if ($s === $t) {
            echo 'Yes' . PHP_EOL;
            exit;
        }
        [$s[$i],$s[$i+1]] = [$s[$i+1],$s[$i]];
    }
    echo 'No' . PHP_EOL;
}
