<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt1 = $cnt2 = 0;
for ($i = 0; $i < $N; $i++) {
    if ($A[$i] === $B[$i]) {
        $cnt1++;
    }
    if (in_array($A[$i], $B) && $A[$i] !== $B[$i]) {
        $cnt2++;
    }
}
echo $cnt1 . PHP_EOL;
echo $cnt2 . PHP_EOL;
