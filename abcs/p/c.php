<?php

[$a,$b,$c] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo $b+min($c,$a+$b+1) . PHP_EOL;
