<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$t = $A-$B;
$r = 32 ** $t;

echo $r . PHP_EOL;
