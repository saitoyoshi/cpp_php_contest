<?php

$N = (int) trim(fgets(STDIN));
$result = 0;
$x = $u = [];
for ($i = 0; $i < $N; $i++) {
    [$x,$u] = explode(" ", trim(fgets(STDIN)));
    if ($u === 'JPY') {
        $result += floatval($x);
    } else {
        $result += (floatval($x) * 380000.0);
    }
}
// var_dump($result);
echo $result . PHP_EOL;
