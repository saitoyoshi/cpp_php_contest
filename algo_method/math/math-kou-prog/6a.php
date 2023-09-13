<?php

[$U,$T,$A] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($T === 1) {
    echo $A . PHP_EOL;
    exit;
}
$diff = $A - $U;
$t = ceil($diff / $T);
echo ($t * $T) . PHP_EOL;
