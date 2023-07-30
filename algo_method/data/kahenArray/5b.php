<?php

$N = (int) fgets(STDIN);
$a = [];
for ($i = 1; $i <= $N; $i++) {
    $a[] = $i;
}
while (count($a) !== 1) {
    array_shift($a);
    $shifted = array_shift($a);
    array_push($a,$shifted);
}
echo $a[0] . PHP_EOL;
