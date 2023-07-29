<?php

function FizzBuzz($n) {
    if ($n % 3 === 0 && $n % 5 === 0) {
        echo 'FizzBuzz' . PHP_EOL;
    } elseif ($n % 3 === 0) {
        echo 'Fizz' . PHP_EOL;
    } elseif ($n % 5 === 0) {
        echo 'Buzz' . PHP_EOL;
    } else {
        echo $n . PHP_EOL;
    }
}

$N = (int) fgets(STDIN);

for ($i = 1; $i <= $N; $i++) {
    FizzBuzz($i);
}
