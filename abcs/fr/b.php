<?php

$s = trim(fgets(STDIN));
$a = count_chars($s,1);
arsort($a);
// var_dump($a);
echo chr(array_keys($a)[0]) . PHP_EOL;;
