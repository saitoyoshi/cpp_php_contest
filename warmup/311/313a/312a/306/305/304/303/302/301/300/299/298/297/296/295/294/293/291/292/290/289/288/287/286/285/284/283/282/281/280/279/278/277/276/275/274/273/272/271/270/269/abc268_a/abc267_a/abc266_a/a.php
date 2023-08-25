<?php

$s = trim(fgets(STDIN));

echo $s[(strlen($s) + 1) / 2 - 1] . PHP_EOL;
