<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $N; $j++) {
        $maxZ = min($N,$M-$i-$j);
        if ($maxZ <= 0) {
            continue;
        }
        $cnt += $maxZ;
    }
}
echo $cnt . PHP_EOL;
