<?php

[$A,$B,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// $C * $t が$A~$Bのなかにあればいい

$t = 1;
while ($C * $t <= $B) {
    if ($A <= $C * $t && $C * $t <= $B) {
        echo ($t * $C) . PHP_EOL;
        exit;
    }
    $t++;
}
echo -1 . PHP_EOL;
