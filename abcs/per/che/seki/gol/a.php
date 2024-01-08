<?php

[$n,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$range = 2*$d+1;
echo (int)ceil($n/$range) . PHP_EOL;
