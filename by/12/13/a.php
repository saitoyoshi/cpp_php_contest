<?php

function enumerateDivisors(int $N): void {
    for ($i = 1; $i ** 2 <= $N; $i++) {
        if ($N % $i !== 0) {
            continue;
        }
        if ($N % $i === 0) {
            echo $i . PHP_EOL;
        }
        if ($i !== $N / $i) {
            echo $N / $i . PHP_EOL;
        }
    }
}
$N = (int) fgets(STDIN);
enumerateDivisors($N);
