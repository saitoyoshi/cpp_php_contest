<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));

// 3 <= x+y+z <= 3N
$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $N; $j++) {
        $z = 3 * $N - $i - $j;
        if ($i+$j+$z <= $M) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
