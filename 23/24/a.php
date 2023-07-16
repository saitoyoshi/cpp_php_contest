<?php

$N = (int) fgets(STDIN);
$P = [];
$Q = [];
for ($i = 0; $i < $N; $i++) {
    [$P[$i], $Q[$i]] = array_map(function ($v) {
        return (int) $v;
    }, explode(" ", trim(fgets(STDIN))));
}
$result = 0.0;
for ($i = 0; $i < $N; $i++) {
    $result += 1.0 * $Q[$i] / $P[$i];
}
printf("%.12lf\n", $result);
