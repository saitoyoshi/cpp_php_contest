<?php


[$N,$K] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo floor($N/$K) . PHP_EOL;
