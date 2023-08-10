<?php


[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$points = [];
for ($i = 0; $i < $N; $i++) {
    $points[$i] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$epsition = 1e-9;
$result = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        $d = 0;
        for ($k = 0; $k < $D; $k++) {
            $d = $d + (abs($points[$j][$k] - $points[$i][$k])) ** 2;
        }
        var_dump(is_int(sqrt($d)));
        if ((int)sqrt($d) == sqrt($d)) {
            $result++;
        }
    }
}
echo $result . PHP_EOL;
