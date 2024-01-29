<?php

$N = (int) trim(fgets(STDIN));
$t = [];
// AABCDDEFE
for ($i = 100000; $i < 1000000; $i++) {
    $s = (string)$i;
    $t[] = $s[0].$s[0].$s[1].$s[2].$s[3].$s[3].$s[4].$s[5].$s[4];
}
echo $t[$N-1] . PHP_EOL;
