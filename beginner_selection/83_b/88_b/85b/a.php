<?php

$N = (int) fgets(STDIN);
$disks = [];
for ($i = 0; $i < $N; $i++) {
    $disks[] = (int) fgets(STDIN);
}
$a = (array_unique($disks));
echo count($a) . PHP_EOL;
