<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));

$lower = max($A,$C);
$upper = min($B,$D);
if ($upper >= $lower) {
    echo ($upper - $lower) . PHP_EOL;
} else {
    echo '0' . PHP_EOL;
}
