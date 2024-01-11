<?php

[$a,$b,$c,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a >= $k) {
    echo $k . PHP_EOL;
} elseif ($a+$b >= $k) {
    echo $a . PHP_EOL;
} else {
    $r = $k - $a-$b;
    echo $a-$r . PHP_EOL;
}
