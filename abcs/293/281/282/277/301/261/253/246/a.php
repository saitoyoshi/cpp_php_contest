<?php

[$X,$Y] = array_map('doubleval',explode(" ", trim(fgets(STDIN))));
// $y = ($Y / $X)  * $x
// $x ** 2 + $y ** 2 = 1;
// $x ** 2 + (($Y / $X) * $x) ** 2 = 1;
// $x^2 + $Y^2 / $X^2 * $x^2 = 1;
// (1+$Y^2/$X^2) * $x^2 = 1;
// $x^2 = 1 / (1 + $Y/$X);
//  $x = sqrt(1/ 1 + $Y/$X);
function getx($X,$Y) {
    return sqrt(1 / (1 + $Y**2/$X**2));
}
function gety($X,$Y,$x) {
    return ($Y/$X) * $x;
}
$x = getx($X,$Y);
$y = gety($X,$Y,$x);
echo $x . ' ' . $y . PHP_EOL;
