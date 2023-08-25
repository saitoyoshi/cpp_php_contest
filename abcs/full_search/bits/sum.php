<?php

$a = range(1,4);
for ($i = 0; $i < (1 << count($a)); $i++) {
    $sum = 0;
    $subset = [];
    for ($j = 0; $j < count($a); $j++) {
        if ($i & (1 << $j)) {
            $sum += $a[$j];
            $subset[] = $j;
        }
    }
    echo $sum . ': ';
    echo '{' . implode(" ", $subset) . '}' . PHP_EOL;
}
