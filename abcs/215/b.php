<?php

$N = (int) trim(fgets(STDIN));
$k = 0;
while (1) {
    if (2**($k+1) <= $N) {
        $k++;
    } else {
        break;
    }
}
echo $k . PHP_EOL;
