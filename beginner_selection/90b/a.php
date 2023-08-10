<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$result = 0;
for ($i = $A; $i <= $B; $i++) {
    $s = (string)$i;
    if (isKaibun($s)) {
        $result++;
    }
}
echo $result . PHP_EOL;

function isKaibun($s) {
    $len = strlen($s);
    for ($i = 0; $i < $len / 2; $i++) {
        if ($s[$i] !== $s[$len -1 - $i]) {
            return false;
        }
    }
    return true;
}
