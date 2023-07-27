<?php

// X(X(X+1)+2)+3 = N
$N = (int) fgets(STDIN);
// $x = 0.0;
for ($i = 0.01; $i <= $N; $i += 0.01) {
    $v = $i ** 3 + $i ** 2 + 2 * $i + 3;
    if ($v >= $N) {
        echo $i . PHP_EOL;
        break;
    }
}
