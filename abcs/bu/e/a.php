<?php

[$a,$b,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));

function h($s) {
    if ($s % 2 === 1) {
        $s--;
        return [$s/2,$s];
    } else {
        return [$s/2,$s];
    }
}
for ($i = 0; $i < $k; $i++) {
    if ($i % 2 === 0) {
        [$n,$a] = h($a);
        $a -= $n;
        $b += $n;
    } else {
        [$n,$b] = h($b);
        $b -= $n;
        $a += $n;
    }
}
echo $a . ' '. $b . PHP_EOL;;
