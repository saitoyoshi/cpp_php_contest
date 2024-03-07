<?php

$N = (int) trim(fgets(STDIN));
$k = (int) trim(fgets(STDIN));

$num = 1;
for ($i = 0; $i < $N; $i++) {
    $t1 = $num*2;
    $t2 = $num+$k;
    if ($t1 >= $t2) {
        $num = $t2;
    } else {
        $num = $t1;
    }
}
echo $num . PHP_EOL;
