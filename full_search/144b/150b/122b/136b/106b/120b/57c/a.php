<?php

$N = (int) fgets(STDIN);
$min = 10 ** 10;
for ($i = 1; $i * $i <= $N; $i++) {
    $A = $i;
    $B = $N / $A;
    if (!is_int($B)) continue;
    if ($min > F($A,$B)) {
        $min = F($A,$B);
    }
}
echo $min . PHP_EOL;

function F($A,$B) {
    $aLen = strlen((string)$A);
    $bLen = strlen((string)$B);
    return ($aLen > $bLen) ? $aLen : $bLen;
}
