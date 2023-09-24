<?php

[$x,$y] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$a = [0,1,3,1,2,1,2,1,1,2,1,2,1];
echo $a[$x] === $a[$y] ? 'Yes' : 'No';
echo PHP_EOL;
