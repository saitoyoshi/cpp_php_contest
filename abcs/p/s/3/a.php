<?php

$N = (int) trim(fgets(STDIN));
for ($i = 0; $i <= 1000; $i++) {
    for ($j = 0; $j <= 1000; $j++) {
        if ($N === f($i,$j)) {
            echo 'Yes' . PHP_EOL;exit;
        }
    }
}
echo 'No' . PHP_EOL;
function f($x,$y) {
    return 2 **$x *3 **$y;
}
