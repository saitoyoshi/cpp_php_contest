<?php

function primeFactorization(int $N): array {
    $result = [];
    for ($i = 2; $i ** 2 <= $N; $i++) {
        while ($N % $i == 0) {
            $result[] = $i;
            $N /= $i;
        }
    }
    if ($N !== 1) {
        $result[] = $N;
    }
    return $result;
}

$N = (int) fgets(STDIN);
$primes = primeFactorization($N);
echo implode(" ", $primes) . PHP_EOL;
