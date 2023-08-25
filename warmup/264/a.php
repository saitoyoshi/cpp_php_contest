<?php

[$L,$R] = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = $L-1; $i < $R; $i++) {
    echo 'atcoder'[$i];
}
echo PHP_EOL;
