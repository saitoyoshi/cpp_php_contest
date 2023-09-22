<?php

$N = (int) fgets(STDIN);
$a = [];
for ($i = 0; $i < $N; $i++) {
    $a[] = trim(fgets(STDIN));
}
$b = array_count_values($a);
// $ac = $b['AC'] ?: 0;
echo 'AC x ' . (isset($b['AC']) ? $b['AC'] : '0') . PHP_EOL;
echo 'WA x ' . (isset($b['WA']) ? $b['WA'] : '0') . PHP_EOL;
echo 'TLE x ' . (isset($b['TLE']) ? $b['TLE'] : '0') . PHP_EOL;
echo 'RE x ' . (isset($b['RE']) ? $b['RE'] : '0') . PHP_EOL;
