<?php

$N = (int) fgets(STDIN);
$L = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        for ($k = $j+1; $k < $N; $k++) {
            if (isExist($L[$i],$L[$j],$L[$k]) && isDifference($L[$i],$L[$j],$L[$k])) {
                $result++;
            }
        }
    }
}
echo $result . PHP_EOL;
function isExist($a,$b,$c) {
    return $a + $b > $c && $b + $c > $a && $c + $a > $b;
}
function isDifference($a,$b,$c) {
    return $a !== $b && $b !== $c && $c !== $a;
}
