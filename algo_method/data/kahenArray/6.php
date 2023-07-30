<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
for ($i = 1; $i <= $Q; $i++) {
    $query = trim(fgets(STDIN));
    if ($query === "0") {
        $A = array_reverse($A);
    } elseif ($query === "2") {
        if (count($A) === 0) {
            echo 'Error' . PHP_EOL;
        } else {
            $poped = array_pop($A);
            echo $poped . PHP_EOL;
        }
    } else {
        [$cmd, $v] = explode(" ", $query);
        array_push($A,$v);
    }
}
