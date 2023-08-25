<?php

$Y = (int) fgets(STDIN);
if ($Y % 4 === 2) {
    echo $Y . PHP_EOL;
} elseif ($Y % 4 === 3) {
    echo ($Y+3) . PHP_EOL;
} elseif ($Y % 4 === 1) {
    echo ($Y+1) . PHP_EOL;
} elseif ($Y % 4 === 0) {
    echo ($Y+2) . PHP_EOL;
}
