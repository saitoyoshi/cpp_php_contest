<?php

$s = str_split(trim(fgets(STDIN)));
for ($i = 1; $i <= 15; $i+=2) {
    if ($s[$i] !== "0") {
        echo "No" . PHP_EOL;
        exit;
    }
}
echo "Yes" . PHP_EOL;
