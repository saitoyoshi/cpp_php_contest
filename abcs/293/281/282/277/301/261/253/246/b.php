<?php

[$X,$Y] = array_map('doubleval',explode(" ", trim(fgets(STDIN))));
$d = ($X ** 2 + $Y ** 2) ** (1/2);
echo $X/$d . ' ' . $Y/$d. PHP_EOL;
