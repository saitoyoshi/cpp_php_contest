<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $H; $i++) {
    $s = trim(fgets(STDIN));
    echo str_replace('TT','PC',$s) . PHP_EOL;
}
