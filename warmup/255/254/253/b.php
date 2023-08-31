<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a <= $b && $b <= $c) {
    echo 'Yes' . PHP_EOL;
} elseif ($a >= $b && $b >= $c) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
