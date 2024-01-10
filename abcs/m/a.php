<?php

$a = str_split(trim(fgets(STDIN)));
sort($a);
echo implode("", $a) . PHP_EOL;;
