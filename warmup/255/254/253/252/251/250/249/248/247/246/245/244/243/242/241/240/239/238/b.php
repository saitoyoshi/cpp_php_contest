<?php

// 数学的帰納法を用いると、2 <= n <= 4 のときは、No,それいがいはYesが言えるので
$n = (int) fgets(STDIN);
if (2 <= $n && $n <= 4) {
    echo 'No';
} else {
    echo 'Yes';
}
echo PHP_EOL;
