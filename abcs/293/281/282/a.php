<?php

[$N,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
$a = [];
for ($i = 0; $i < $N; $i++) {
    $a[$i] = [];
    for ($j = 0; $j < $M; $j++) {
        if ($s[$i][$j] === "o") {
            $a[$i][$j] = $j;
        }
    }
}
$m = [];
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N ; $j++) {
        $m[] = array_unique(array_merge($a[$i],$a[$j]));
    }
}
// var_dump($m);exit;
$cnt = 0;
foreach ($m as $arr) {
    if (count($arr) === $M) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
