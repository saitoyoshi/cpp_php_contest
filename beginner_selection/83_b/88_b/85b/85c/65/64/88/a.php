<?php

$N = (int) fgets(STDIN);
$A = (int) fgets(STDIN);

$r = $N % 500;
if ($r <= $A) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
