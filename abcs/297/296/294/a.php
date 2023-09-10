<?php

$alfa = range('A','Z');
array_unshift($alfa,'.');
// var_dump($alfa);
[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$mat = [];
for ($i = 0; $i < $H; $i++) {
    $mat[] = array_map('intval',explode(" ", trim(fgets(STDIN))));
}
// var_dump($mat);
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        echo $alfa[$mat[$i][$j]];
    }
    echo PHP_EOL;
}
