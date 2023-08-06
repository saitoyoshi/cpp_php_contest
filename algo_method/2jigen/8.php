<?php

[$N,$color] = explode(" ", trim(fgets(STDIN)));
$N = (int)$N;

$result = 0;
for ($i = 0; $i < $N; $i++) {
    $input = explode(" ", trim(fgets(STDIN)));
    if (in_array($color, $input)) {
        $result++;
    }
}
echo $result . PHP_EOL;
