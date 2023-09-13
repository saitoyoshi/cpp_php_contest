<?php

[$U,$T,$A] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($T === 1) {
    echo $A . PHP_EOL;
    exit;
}
$diff = $A - $U;
$t = $diff % $T;
$t2 = $T - $t;
echo ($A+$t2) . PHP_EOL;
