<?php

$N = (int) trim(fgets(STDIN));
$P = 1000000000;
for ($i = 0; $i < $N; $i++) {
    [$a,$p,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    // echo $x-$a . PHP_EOL;
    if ($x-$a > 0 && $P > $p) {
        $P = $p;
    }
}
if ($P === 1000000000) {
    echo -1 . PHP_EOL;
} else {
    echo $P . PHP_EOL;
}
