<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$table = array_fill(1,9,0);
for ($i = 0; $i < $N; $i++) {
    $table[$arr[$i]]++;
}
foreach ($table as $v) {
    echo $v . PHP_EOL;
}
