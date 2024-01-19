<?php

$N = (int) trim(fgets(STDIN));
$a = [];
for ($i = 0; $i < $N; $i++) {
    $s = trim(fgets(STDIN));
    $win = 0;
    for ($j = 0; $j < strlen($s); $j++) {
        if ($s[$j] === 'o') {
            $win++;
        }
    }
    $a[$i+1] = $win;
}
arsort($a);
$keys = array_keys($a);
// var_dump($keys);
echo implode(" ", $keys) . PHP_EOL;
