<?php

$S = trim(fgets(STDIN));
$c = trim(fgets(STDIN));

for ($i = 0; $i < strlen($S); $i++) {
    if ($S[$i] === $c) {
        echo 'Yes' . PHP_EOL;
        exit;
    }
}
echo 'No' . PHP_EOL;
