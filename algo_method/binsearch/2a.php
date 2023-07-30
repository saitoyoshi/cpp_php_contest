<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($x = 0.01; $x < 100000; $x += 1e-4) {
    if (getExp($N,$x) >= $M) {
        echo $x . PHP_EOL;
        exit;
    }
}
$left = -1;
$right = 100;
while ($right - $left > 1e-9) {
    $mid = (float) ($left + $right) / 2.0;
    if (isOk($mid, $M,$N)) {
        $right = (float)$mid;
    } else {
        $left = (float)$mid;
    }
}
printf("%.12f", $right);


function getExp($N,$x) {
    $result = $N + 1;
    for ($i = 1; $i <= 5; $i++) {
        $result *= $x;
        $result += 1;
    }
    return $result;
}
function isOk(float $x, int $M, int $N) {
    return (float)getExp($N,$x) >= (float)$M;
}
