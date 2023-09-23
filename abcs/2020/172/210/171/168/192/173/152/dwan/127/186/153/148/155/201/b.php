<?php

$N = (int) fgets(STDIN);
$names = [];
$heights = [];
for ($i = 0; $i < $N; $i++) {
    [$names[$i], $heights[$i]] = explode(" ", trim(fgets(STDIN)));
    $heights[$i] = (int)$heights[$i];
}
$a = [];
for ($i = 0; $i < $N; $i++) {
    $a[] = [$heights[$i],$names[$i]];
}
rsort($a);
[$dummy,$ans] = $a[1];
echo $ans . PHP_EOL;
