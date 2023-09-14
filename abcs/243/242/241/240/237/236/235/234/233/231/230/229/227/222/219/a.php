<?php

$s = [];
for ($i = 0; $i < 3; $i++) {
    $s[] = trim(fgets(STDIN));
}
$t = str_split(trim(fgets(STDIN)));
foreach ($t as $num) {
    echo $s[$num-1];
}
echo PHP_EOL;
