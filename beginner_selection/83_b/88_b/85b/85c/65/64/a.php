<?php

[$r,$g,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$number = 100 * $r + 10 * $g + $b;

if ($number % 4 === 0) {
    echo 'YES' . PHP_EOL;
} else {
    echo 'NO' . PHP_EOL;

}
