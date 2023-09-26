<?php

$s = trim(fgets(STDIN));
for ($i = 0; $i < strlen($s); $i++) {
    if ($i % 2 === 0) {
        if ($s[$i] === 'L') {
            echo 'No'. PHP_EOL;
            exit;
        }
    } else {
        if ($s[$i] === 'R') {
            echo 'No'. PHP_EOL;
            exit;
        }
    }
}
echo 'Yes' . PHP_EOL;
