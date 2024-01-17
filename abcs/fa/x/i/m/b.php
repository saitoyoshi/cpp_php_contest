<?php

$s = trim(fgets(STDIN));
$n = 0;
foreach ($s as $v) {
    $v = (int)$v;
    $n += $v;
}
if ($n % 9 === 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
