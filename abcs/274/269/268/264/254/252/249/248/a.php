<?php

[$A,$B,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($B <= $A) {
    echo 0 . PHP_EOL;
    exit;
}
$cnt = 0;
while ($B > $A) {
    $A *= $K;
    $cnt++;
    if ($B <= $A) {
        echo $cnt .PHP_EOL;
        exit;
    }
}
