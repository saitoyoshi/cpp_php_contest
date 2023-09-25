<?php

[$N,$M,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cnt = 0;
for ($i = 0; $i < $N; $i++) {
    $A = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if (calc($B,$A,$M,$C) > 0) {
        $cnt++;
    }
}
echo $cnt . PHP_EOL;


function calc($B,$arr,$M,$C) {
    $result = 0;
    for ($i = 0; $i < $M; $i++) {
        $result += $B[$i] * $arr[$i];
    }
    return $result+$C;
}
