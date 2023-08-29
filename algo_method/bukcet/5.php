<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$bucket = array_fill(0,$N,[]);
for ($i = 0; $i < $Q; $i++) {
    [$cmd,$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        $index = array_search($x, $bucket[$y]);
        if ($index !== false) {
            ;
        } else {
            $bucket[$y][] = $x;
        }
    } elseif ($cmd === 1) {
        $index = array_search($x, $bucket[$y]);
        if ($index === false) {
            ;
        } else {
            unset($bucket[$y][$index]);
        }
    } else {
        echo count($bucket[$x]) . PHP_EOL;
    }
}
