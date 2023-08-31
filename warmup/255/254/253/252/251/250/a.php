<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
[$R,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$dx = [0,0,-1,1];
$dy = [-1,1,0,0];
$cnt = 0;
for ($i = 0; $i < 4; $i++) {
    $a = $R+$dy[$i];
    $b = $C+$dx[$i];
    if (1 <= $a && 1 <= $b && $a <= $H && $b <= $W) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;
