<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
foreach ($A as $key => $v) {
    if ($v === $X) {
        unset($A[$key]);
    }
}
echo implode(" ", $A) . PHP_EOL;
