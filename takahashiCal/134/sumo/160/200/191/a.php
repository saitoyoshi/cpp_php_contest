<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$A = array_map('intval',explode(" ", trim(fgets(STDIN))));
$result = array_filter($A,fn($v) => $v !== $X);
echo implode(" ", $result) . PHP_EOL;
