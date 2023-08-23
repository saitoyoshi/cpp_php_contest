<?php

[$N,$X] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$P = array_map('intval',explode(" ", trim(fgets(STDIN))));
$index = array_search($X, $P);
echo $index + 1 . PHP_EOL;
