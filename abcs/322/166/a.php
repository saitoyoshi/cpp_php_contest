<?php


[$n,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$exists = range(1,$n);
$differ = [];
for ($i = 0; $i < $k; $i++) {
    $d = (int) trim(fgets(STDIN));
    $arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
    foreach ($arr as $v) {
        $differ[] = $v;
    }
}
$notOwn = array_diff($exists,$differ);
echo count($notOwn) . PHP_EOL;
