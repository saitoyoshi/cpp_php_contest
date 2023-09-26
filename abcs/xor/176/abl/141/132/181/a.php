<?php

$N = (int) trim(fgets(STDIN));
$result = 0;
for ($i = 0; $i < $N; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $result += sumAtoB($a,$b);
}
echo $result . PHP_EOL;

function sumAtoB($a,$b) {
    $result = 0;
    for ($i = $a; $i <= $b; $i++) {
        $result += $i;
    }
    return $result;
}
