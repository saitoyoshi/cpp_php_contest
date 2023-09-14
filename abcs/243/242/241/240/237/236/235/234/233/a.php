<?php

[$L,$R] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));
$substr = substr($s,$L-1,$R-$L+1);
for ($i = 0; $i < $L-1; $i++) {
    echo $s[$i];
}
for ($i = strlen($substr); $i >= 1; $i--) {
    echo $substr[$i-1];
}
for ($i = $R; $i < strlen($s); $i++) {
    echo $s[$i];
}
echo PHP_EOL;
