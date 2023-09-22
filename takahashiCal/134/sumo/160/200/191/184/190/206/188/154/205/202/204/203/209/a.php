<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    if ($i % 2 === 1) {
        $sum += ($arr[$i] - 1);
    } else {
        $sum += $arr[$i];
    }
}
echo ($X >= $sum ? 'Yes' : 'No') . PHP_EOL;
