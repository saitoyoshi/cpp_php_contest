<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$i = $X;
$b = array_fill(1,$N,false);
do {
    $b[$i] = true;
    $i = $a[$i-1];
} while (!$b[$i]);
// var_dump($b);exit;
$r = 0;
for ($i = 1; $i <= $N; $i++) {
    if (isset($b[$i])) {
        if ($b[$i]) {
            $r++;
        }
    }
}
echo $r . PHP_EOL;
