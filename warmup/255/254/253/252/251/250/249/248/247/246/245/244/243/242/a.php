<?php

[$A,$B,$C,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($A >= $X) {
    echo '1.000000000000' . PHP_EOL;
} else {
    $U = $B - $A;
    if ($U >= $X) {
        echo $C / $U . PHP_EOL;
    } else {
        echo '0.000000000000' . PHP_EOL;
    }
}
