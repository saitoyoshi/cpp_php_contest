<?php

$s = trim(fgets(STDIN));
$s = str_split($s);
echo implode(" ", $s) . PHP_EOL;
