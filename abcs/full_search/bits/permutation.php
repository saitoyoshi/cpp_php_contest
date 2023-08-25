<?php

$a = range(1,4);
for ($i = 0; $i < (1 << count($a)); $i++) {
    $perm = [];
    for ($j = 0; $j < count($a); $j++) {
        if ($i & (1 << $j)) {
            $perm[] = $a[$j];
        }
    }
    echo implode(" ", $perm) . PHP_EOL;
}
