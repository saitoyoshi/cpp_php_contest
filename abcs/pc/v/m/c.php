<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = [];
for ($i = 0; $i < $N; $i++) {
    $arr[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
// var_dump($arr);exit;
for ($i = 0; $i < $Q; $i++) {
    [$s,$t] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    echo $arr[$s-1][$t] . PHP_EOL;
}
