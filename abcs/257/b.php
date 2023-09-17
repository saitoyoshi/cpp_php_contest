<?php

[$N,$K,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$L = array_map('intval',explode(" ", trim(fgets(STDIN))));

for ($i = 0; $i < $Q; $i++) {
    if (isset($A[$L[$i]-1]) && $A[$L[$i]] - $A[$L[$i]-1] !== 1 && $A[$L[$i]-1] !== $N) {
        $A[$L[$i]-1]++;
    }
}
echo implode(" ", $A) . PHP_EOL;
