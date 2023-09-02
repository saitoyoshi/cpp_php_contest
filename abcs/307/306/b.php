<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$res = 0;
for ($i = 0; $i < 64; $i++) {
    $res += $arr[$i] << $i;
}
echo $res . PHP_EOL;
