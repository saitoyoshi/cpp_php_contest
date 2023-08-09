<?php

[$N,$P,$Q] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$products = array_map('intval',explode(" ", trim(fgets(STDIN))));
$minPrice = min($products);
if ($P < $Q + $minPrice) {
    echo $P . PHP_EOL;
} else {
    echo ($Q + $minPrice) . PHP_EOL;
}
