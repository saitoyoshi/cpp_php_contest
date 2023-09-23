<?php

$N = (int) fgets(STDIN);
$titles = [];
$seconds = [];
for ($i = 0; $i < $N; $i++) {
    [$titles[$i], $seconds[$i]] = explode(" ", trim(fgets(STDIN)));
    $seconds[$i] = (int)$seconds[$i];
}

$X = trim(fgets(STDIN));
$index = array_search($X,$titles);
for ($i = $index+1; $i <= $N; $i++) {
    $sum += $seconds[$i];
}
echo $sum . PHP_EOL;
