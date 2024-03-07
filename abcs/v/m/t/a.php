<?php

$N = (int) trim(fgets(STDIN));
$b = $a = [];
for ($i = 0; $i < $N; $i++) {
    [$a[],$b[]] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$res = 100001;
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($i === $j) {
            $v = $a[$i]+$b[$i];
            if ($v < $res) {
                $res = $v;
            }
        } else {
            $v = max($a[$i],$b[$j]);
            if ($v < $res) {
                $res = $v;
            }
        }
    }
}
echo $res . PHP_EOL;
