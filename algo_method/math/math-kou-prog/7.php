<?php

[$A,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$t = ceil($A/$K);
echo $t * $K . PHP_EOL;
