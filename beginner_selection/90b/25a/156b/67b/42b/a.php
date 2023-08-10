<?php

[$N,$L] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$strings = [];
for ($i = 0; $i < $N; $i++) {
    $strings[] = trim(fgets(STDIN));
}
sort($strings);
echo implode("", $strings) . PHP_EOL;
