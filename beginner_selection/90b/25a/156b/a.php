<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$number = $N;
$result = [];
while ((int)$number > 0) {
    $result[] = $number % $K;
    $number /= $K;
}
echo count($result) . PHP_EOL;
