<?php

$X = (int) fgets(STDIN);
if ($X >= 90) {
    echo 'expert' . PHP_EOL;
} elseif($X >= 70) {
    echo (90-$X) . PHP_EOL;
} elseif ($X >= 40) {
    echo (70-$X) . PHP_EOL;
} else {
    echo (40-$X) . PHP_EOL;
}
