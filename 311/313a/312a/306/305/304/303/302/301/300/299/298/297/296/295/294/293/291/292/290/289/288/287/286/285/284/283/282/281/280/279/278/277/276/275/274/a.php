<?php


[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = round($B / $A, 3);
if (strlen($r) === 1) {
    echo $r . '.000' . PHP_EOL;
} elseif (strlen($r) === 3) {
    echo $r . '00' . PHP_EOL;
} elseif (strlen($r) === 4) {
    echo  $r . '0' . PHP_EOL;
} else {
    echo $r . PHP_EOL;
}
