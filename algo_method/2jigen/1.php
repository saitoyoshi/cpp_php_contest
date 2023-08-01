<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $H; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$string = implode($strings);
$result = substr_count($string, 'o');
echo $result . PHP_EOL;
