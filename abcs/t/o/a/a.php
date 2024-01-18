<?php

// n h w
// a1 b1
[$n,$h,$w] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $n; $i++) {
    [$h1,$w1] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($h1 >= $h && $w1 >= $w) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
