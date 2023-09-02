<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// a < bなので
if ($b - $a === 1 || $b - $a === 9) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
