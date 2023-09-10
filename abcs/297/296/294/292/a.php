<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = array_fill(1,$N,0);
for ($i = 0; $i < $Q; $i++) {
    [$e,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($e === 1) {
        $bucket[$x]++;
    } elseif ($e === 2) {
        $bucket[$x] += 2;
    } else {
        if ($bucket[$x] >= 2) {
            echo 'Yes' . PHP_EOL;
        } else {
            echo 'No' . PHP_EOL;
        }
    }
}
