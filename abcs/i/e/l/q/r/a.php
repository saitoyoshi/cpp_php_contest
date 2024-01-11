<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = array_map('intval',explode(" ", trim(fgets(STDIN))));
$r = array_filter($a,fn($v) => $v !== $X);
echo implode(' ',$r). PHP_EOL;
