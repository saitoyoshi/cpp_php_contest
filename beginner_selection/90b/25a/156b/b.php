<?php


[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$number = $N;
$result = 0;
while ((int)$number > 0) {
    $number /= $K;
    $result++;
}
echo $result . PHP_EOL;
