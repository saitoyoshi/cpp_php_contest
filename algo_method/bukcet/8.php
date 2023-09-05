<?php

//  p<=10^4なのでx^2+y^2=pであるx,yは-10^2<=x,y<=10^2を満たす
//そのため、これを満たす整数の組は200x200=4 x 10^4

$Q = (int) fgets(STDIN);
$bucket = array_fill(0,10001,0);
// var_dump($bucket);exit;
for ($x = -100; $x <= 200; $x++) {
    for ($y = -100; $y <= 200; $y++) {
        $v = $x ** 2 + $y ** 2;
        $bucket[$v]++;
    }
}

for ($i = 0; $i < $Q; $i++) {
    $P = (int) fgets(STDIN);
    echo $bucket[$P] . PHP_EOL;
}
