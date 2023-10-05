<?php

[$n,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($a);
$sum = 0;
for ($i = 0; $i < $n-$k; $i++) {
    $sum += $a[$i];
}
echo $sum . PHP_EOL;
