<?php

[$N,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$arr = [];
for ($i = 0; $i < $N; $i++) {
    $tmp = array_map('intval',explode(" ", trim(fgets(STDIN))));
    array_shift($tmp);
    $arr[] = $tmp;
}
for ($i = 0; $i < $Q; $i++) {
    [$s,$t] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    echo $arr[$s-1][$t-1] . PHP_EOL;
}
