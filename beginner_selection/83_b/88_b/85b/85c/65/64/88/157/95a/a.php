<?php

$string = trim(fgets(STDIN));
$cnt = 0;
if ($string[0] === "o") $cnt++;
if ($string[1] === "o") $cnt++;
if ($string[2] === "o") $cnt++;

echo (700 + 100 * $cnt) . PHP_EOL;
