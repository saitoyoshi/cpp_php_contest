<?php

$letters = str_split(trim(fgets(STDIN)));
sort($letters);
echo implode($letters) . PHP_EOL;
