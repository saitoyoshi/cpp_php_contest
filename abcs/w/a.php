<?php

$N = (int) trim(fgets(STDIN));
$p = array_map('intval',explode(" ", trim(fgets(STDIN))));
$q = (int) trim(fgets(STDIN));
for ($i = 0; $i < $q; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $aidx = array_search($a,$p);
    $bidx = array_search($b,$p);
    if ($aidx > $bidx) {
        echo $b . PHP_EOL;
    } else {
        echo $a . PHP_EOL;

    }

}
