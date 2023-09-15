<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
arsort($arr);
echo (array_keys($arr)[1]+1). PHP_EOL;
