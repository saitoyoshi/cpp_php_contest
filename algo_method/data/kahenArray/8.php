<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
for ($i = 1; $i <= $Q; $i++) {
    [$cmd, $v] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        $A = array_reverse($A);
        array_push($A,$v);
        $A = array_reverse($A);
    } elseif ($cmd === 1) {
        // pushback
        array_push($A,$v);
    } else {
        if (count($A) - 1 < $v) {
            echo 'Error' . PHP_EOL;
        } else {
            echo $A[$v] . PHP_EOL;
        }
    }

}
