<?php

$N = (int) fgets(STDIN);
$B = array_map(function ($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$R = array_map(function ($v) {
return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$result = 0.0;
for ($i = 0; $i < $N; $i++) {
    $result += (float)$B[$i];
    $result += (float)$R[$i];
}
printf("%.12f\n", $result / $N);
