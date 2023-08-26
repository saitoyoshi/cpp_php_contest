<?php

$K = (int) fgets(STDIN);
if ($K < 10) {
    echo '21:0' . $K . PHP_EOL;
} elseif ($K < 60) {
    echo '21:' . $K . PHP_EOL;
} elseif ($K < 70) {
    echo '22:0' . ($K-60) . PHP_EOL;
} else {
    echo '22:' . ($K-60) . PHP_EOL;
}
