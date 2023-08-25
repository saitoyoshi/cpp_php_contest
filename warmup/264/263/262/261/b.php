<?php

[$L1,$R1,$L2,$R2] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($L1 > $L2) {
    [$L1,$L2] = [$L2,$L1];
    [$R1,$R2] = [$R2,$R1];
}
if ($R1 <= $L2) {
    echo 0 . PHP_EOL;
} elseif ($R1 <= $R2) {
    echo $R1 - $L2 . PHP_EOL;
} else {
    echo $R2 - $L2 . PHP_EOL;
}
