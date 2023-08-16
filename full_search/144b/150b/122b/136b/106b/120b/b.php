<?php

[$A,$B,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$smaller = min($A,$B);
$dividors = [];
for ($i = $smaller; $i >= 1; $i--) {
    if ($A % $i === 0 && $B % $i === 0) {
        $K--;
        if ($K === 0) {
            echo $i . PHP_EOL;
        }
    }
}
