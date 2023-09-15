<?php

$s = [
    'H' => 0,
    '2B' => 0,
    '3B' => 0,
    'HR' => 0,
];
for ($i = 0; $i < 4; $i++) {
    $s[trim(fgets(STDIN))]++;
}
if (isOK($s)) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
function isOk($arr) {
    $filtered = array_filter($arr, fn($v) => $v === 1);
    return count($filtered) === 4;
}
