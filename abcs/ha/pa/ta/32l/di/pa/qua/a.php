<?php

[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = [];
for ($i = 0; $i < $N; $i++) {
    $s[] = trim(fgets(STDIN));
}
$r = array_slice($s,0,$K);
sort($r);
foreach ($r as $v) {
    echo $v . PHP_EOL;
}
