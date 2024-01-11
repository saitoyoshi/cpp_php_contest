<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$p = array_fill(1,$N,0);
// var_dump($p);exit;
for ($i = 0; $i < $Q; $i++) {
    [$c,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($c === 1) {
        $p[$x]++;
    } elseif ($c === 2) {
        $p[$x] += 2;
    } else {
        if ($p[$x] >= 2) {
            echo 'Yes' . PHP_EOL;
        } else {
            echo 'No' . PHP_EOL;
        }
    }
}
