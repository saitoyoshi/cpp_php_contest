<?php

$N = (int) trim(fgets(STDIN));
$p = [];
for ($i = 0; $i < $N; $i++) {
    $p[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j =$i+1; $j < $N; $j++) {
        $dx = $p[$i][0] - $p[$j][0];
        $dy = $p[$i][1] - $p[$j][1];
        $k = $dy / $dx;
        if (-1 <= $k && $k <= 1) {
            $cnt++;
        }
    }
}
echo $cnt . PHP_EOL;
