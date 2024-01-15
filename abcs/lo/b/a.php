<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$c = ($a-$b)/3+$b;
echo $c . PHP_EOL;
