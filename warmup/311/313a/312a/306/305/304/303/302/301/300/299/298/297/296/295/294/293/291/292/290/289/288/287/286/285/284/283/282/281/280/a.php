<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 0;
for ($i = 0; $i < $H; $i++) {
    $str = trim(fgets(STDIN));
    $cnt += substr_count($str, '#');
}
echo $cnt . PHP_EOL;
