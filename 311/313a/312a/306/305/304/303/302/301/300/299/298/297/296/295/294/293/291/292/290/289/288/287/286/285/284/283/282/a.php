<?php

$N = (int) fgets(STDIN);

$a = range('A','Z');
echo implode("", array_slice($a, 0, $N)) . PHP_EOL;;
