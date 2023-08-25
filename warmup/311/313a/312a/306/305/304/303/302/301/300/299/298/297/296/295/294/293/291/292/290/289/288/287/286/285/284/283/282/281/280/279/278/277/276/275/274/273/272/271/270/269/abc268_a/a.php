<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo count(array_unique($arr)) . PHP_EOL;
