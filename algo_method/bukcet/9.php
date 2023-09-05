<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

$isSumSquare = array_fill(0,2 * 1000000+1,0);
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        $v = $arr[$i] ** 2 + $arr[$j] ** 2;
        $isSumSquare[$v] = 1;
    }
}

for ($v = 0; $v < 2 * 1000000+1; $v++ ) {
    if ($v > $M) continue;
    if ($isSumSquare[$v] === 1 && $isSumSquare[$M-$v] === 1) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
