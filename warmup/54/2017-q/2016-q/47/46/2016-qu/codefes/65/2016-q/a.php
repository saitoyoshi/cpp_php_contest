<?php

$s = trim(fgets(STDIN));
if (strpos($s, 'CF') !== false) {
    echo 'Yes' . PHP_EOL;
    exit;
}
$first = strpos($s,'C');
if ($first === false) {
    echo 'No' . PHP_EOL;
    exit;
}
$second = strpos($s,'F');
if ($second === false) {
    echo 'No' . PHP_EOL;
    exit;
}
if ($first > $second) {
    echo 'No' . PHP_EOL;
    exit;
}
echo 'Yes' . PHP_EOL;
