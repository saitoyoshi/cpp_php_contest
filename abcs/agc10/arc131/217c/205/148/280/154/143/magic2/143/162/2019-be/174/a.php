<?php

[$N,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$pos = [];
for ($i = 0; $i < $N; $i++) {
    $pos[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
$cnt = 0;
foreach ($pos as $p) {
    $d = d($p[0],$p[1]);
    if ($d <= $D) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
// var_dump($pos);

function d($x,$y) {
    return sqrt($x ** 2 + $y ** 2);
}
