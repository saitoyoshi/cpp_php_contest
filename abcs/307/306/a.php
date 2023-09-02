<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$res = 0;
$e = 0;
foreach ($arr as $v) {
    $res += $v * (2 ** $e);
    $e++;
}
echo $res . PHP_EOL;
