<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
for ($i = 1; $i <= 10000000000000000000; $i++) {
    $x = (string)$i;
    $doubleX = (string)($i*2);
    if (strpos($x,$a) !== false && strpos($doubleX,$b) !== false) {
        echo $x . PHP_EOL;
        exit;
    }
}
echo 'e' . PHP_EOL;
