<?php

$N = (int) fgets(STDIN);
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
for ($i = 1; $i <= $Q; $i++) {
    $query = trim(fgets(STDIN));
    if ($query === "1") {
        if (count($A) === 0) {
            echo 'Error' . PHP_EOL;
        } else {
            $shifted = array_shift($A);
            echo $shifted . PHP_EOL;
        }
    } else {
        [$cmd,$v] = explode(" ", $query);
        $v = (int)$v;
        array_unshift($A, $v);
    }
}
