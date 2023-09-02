<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a === 10 && $b === 1 || $b === 10 && $a === 1) {
    echo 'Yes' . PHP_EOL;
} elseif ($a + 1 === $b || $a - 1 === $b) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
