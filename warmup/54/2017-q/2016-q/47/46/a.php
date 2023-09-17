<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$res = count(array_unique([$a,$b,$c]));
echo $res . PHP_EOL;
