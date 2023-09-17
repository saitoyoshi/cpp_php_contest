<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($a+$b === $c || $b+$c === $a || $c+$a === $b) {
    echo 'Yes';
} else {
    echo 'No';
}
echo PHP_EOL;
