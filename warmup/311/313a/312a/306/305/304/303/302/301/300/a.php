<?php

[$N,$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$C = array_map('intval',explode(" ", trim(fgets(STDIN))));
$ans = $A + $B;
$index = array_search($ans,$C);
echo ($index+1) . PHP_EOL;
