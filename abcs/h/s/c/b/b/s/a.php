<?php

[$N,$M,$T] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = 0;
$remain = $N;
for ($i = 0; $i < $M; $i++) {
    [$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $t = $a-$s;
    $remain -= $t;
    if ($remain <= 0) {
        echo 'No' . PHP_EOL;exit;
    }
    $charge = $b-$a;
    $remain += $charge;
    if ($remain >= $N) {
        $remain = $N;
    }
    $s = $b;
    // echo $remain . PHP_EOL;
}
$remain -= ($T-$s);
if ($remain > 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
