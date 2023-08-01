<?php

[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $H; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$result = 0;
foreach ($strings as $string) {
    for ($i = 0; $i < $W; $i++) {
        if ($string[$i] === 'o') {
            $result++;
        }
    }
}
echo $result . PHP_EOL;
