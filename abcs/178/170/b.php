<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

if (2*$a <= $b && $b <= 4*$a && $b % 2 === 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;

}
