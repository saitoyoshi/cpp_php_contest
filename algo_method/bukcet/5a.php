<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$isfollow = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $isfollow[$i][$j] = 0;
    }
}
$bucket = array_fill(0,$N,0);
for ($i = 0; $i < $Q; $i++) {
    [$cmd,$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        if ($isfollow[$x][$y] === 0) {
            $isfollow[$x][$y] = 1;
            $bucket[$y]++;
        }
    } elseif ($cmd === 1) {
        if ($isfollow[$x][$y] === 1) {
            $isfollow[$x][$y] = 0;
            $bucket[$y]--;
        }
    } else {
        echo $bucket[$x] . PHP_EOL;
    }
}
