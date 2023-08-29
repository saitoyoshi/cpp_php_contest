<?php

$N = (int) fgets(STDIN);
$L = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
sort($L);
$accs = [];
$accs[0] = 0;
for ($i = 0; $i < $N; $i++) {
    $accs[$i+1] = $L[$i];
}
// var_dump($accs);
// exit;
for ($i = 0; $i < $Q; $i++) {
    [$m,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $c1 = array_filter($accs, function ($v) use ($m,$M) {
        return $m <= $v && $v <= $M;
    });
    // var_dump($c1);
    echo count($c1) . PHP_EOL;
}
// var_dump($accs);
