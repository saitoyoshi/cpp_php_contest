<?php

[$L,$R] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));
$substr = strrev(substr($s,$L-1,$R-$L+1));
echo substr($s,0,$L-1) . $substr . substr($s,$R) . PHP_EOL;
