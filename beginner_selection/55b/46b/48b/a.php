<?php

[$a,$b,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = 0;

if ($a === $b) {
    if ($a % $x === 0) {
        echo '1' . PHP_EOL;;
    } else {
        echo '0' . PHP_EOL;;
    }
    exit;
}
$n1 = (int) ($a / $x);
$n2 = (int) ($b / $x);
echo ($n2-$n1 + 1) . PHP_EOL;
