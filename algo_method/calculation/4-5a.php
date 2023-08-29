<?php

$N = (int) fgets(STDIN);
$L = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
// すべてのひもが1e5よりも短いものとして、その紐の長さの数の配列をつくる
$numLengthBuket = array_fill(0,1e5+1,0);
for ($i = 0; $i < $N; $i++) {
    $numLengthBuket[$L[$i]]++;
}
$accs = [];
$accs[0] = 0;
for ($i = 0; $i < 1e5; $i++) {
    $accs[$i+1] = $accs[$i] + $numLengthBuket[$i+1];
}
// $a = array_slice($accs,0,50);
// var_dump($a);
// exit;
for ($i = 0; $i < $Q; $i++) {
    [$m,$M] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    echo $accs[$M] - $accs[$m-1] . PHP_EOL;
}
// var_dump($accs);
