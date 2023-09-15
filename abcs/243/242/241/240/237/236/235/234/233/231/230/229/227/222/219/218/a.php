<?php

$alfa = range('a', 'z');
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
foreach ($arr as $v) {
    echo $alfa[$v-1];
}
echo PHP_EOL;
