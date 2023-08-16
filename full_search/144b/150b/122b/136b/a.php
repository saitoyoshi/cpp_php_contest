<?php

$N = (int) fgets(STDIN);
$result = 0;
for ($i = 1; $i <= $N; $i++) {
    $number = (string)$i;
    $ketasu = strlen($number);
    if ($ketasu % 2 === 1) {
        $result++;
    }
}
echo $result . PHP_EOL;
