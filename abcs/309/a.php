<?php

$N = (int) fgets(STDIN);
$strs = [];
for ($i = 0; $i < $N; $i++) {
    $strs[] = trim(fgets(STDIN));
}
// var_dump($strs);
$outerround = "";
for ($i = 0; $i < $N; $i++) {
    $outerround .= $strs[0][$i];
}
for ($i = 1; $i < $N; $i++) {
    $outerround .= $strs[$i][$N-1];
}
for ($i = $N-2; $i >= 0; $i--) {
    $outerround .= $strs[$N-1][$i];
}
for ($i = $N-2; $i >= 1; $i--) {
    $outerround .= $strs[$i][0];
}
$outerround = $outerround[-1] . substr($outerround,0,strlen($outerround)-1) ;
// var_dump($outerround);
for ($i = 0; $i < $N; $i++) {
    $strs[0][$i] = $outerround[$i];
}
for ($i = 1; $i < $N; $i++) {
    $strs[$i][$N-1] = $outerround[$i+$N-1];
}
for ($i = $N-2; $i >= 0; $i--) {
    $strs[$N-1][$i] = $outerround[2 * $N - 1 + ($N-2-$i)];
}
for ($i = $N-2; $i >= 1; $i--) {
    $strs[$i][0] = $outerround[3 * $N -2 + ($N-2 - $i)];
}
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        echo $strs[$i][$j];
    }
    echo PHP_EOL;
}
