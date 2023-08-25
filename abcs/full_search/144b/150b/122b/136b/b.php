<?php

$N = (int) fgets(STDIN);
$result = 0;
for ($i = 1; $i <= $N; $i++) {
    if (getKetasu($i) % 2 === 1) {
        $result++;
    }
}
echo $result . PHP_EOL;

function getKetasu($num) {
    $ketasu = 0;
    while ($num !== 0) {
        $num = (int) ($num / 10);
        $ketasu++;
    }
    return $ketasu;
}
