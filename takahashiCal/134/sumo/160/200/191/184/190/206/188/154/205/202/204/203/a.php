<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 0;
for ($i = 1; $i <= $N; $i++) {
    for ($j = 1; $j <= $K; $j++) {
        $roomnumber = $i . '0' . $j;
        $sum += (int)$roomnumber;

    }
}
echo $sum . PHP_EOL;
