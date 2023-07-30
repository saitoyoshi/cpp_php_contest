<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
$AFront = [];
for ($i = 1; $i <= $Q; $i++) {
    [$cmd, $v] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        $AFront[] = $v;
    } elseif ($cmd === 1) {
        array_push($A,$v);
    } else {
        if ($v < count($AFront)) {
            echo $AFront[count($AFront) - 1 - $v] .PHP_EOL;
        } else {
            $v = $v - count($AFront);
            if ($v < count($A)) {
                echo $A[$v] . PHP_EOL;
            } else {
                echo 'Error' . PHP_EOL;
            }
        }
    }

}
