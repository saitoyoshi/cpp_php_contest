<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));

echo func($B,$A) . PHP_EOL;
function func($x, $A) {
    if ($x < $A) return 0;
    return func($x-1,$A) + $x;
}
