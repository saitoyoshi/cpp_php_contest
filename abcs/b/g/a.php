<?php

// 以下の操作を
// K 回繰り返した後で、グラスとマグカップに水がそれぞれ何 ml ずつ入っているか求めてください。

// グラスが水で満たされているとき、すなわちグラスにちょうど
// G ml 入っているとき、グラスの水をすべて捨てる。
// そうでなく、マグカップが空であるとき、マグカップを水で満たす。
// 上のいずれでもないとき、マグカップが空になるかグラスが水で満たされるまで、マグカップからグラスに水を移す。
function handle($g,$m,$G,$M) {
    if ($g === $G) {
        $g = 0;
    } elseif ($m === 0) {
        $m = $M;
    } else {
        while ($m !== 0 && $g !== $G) {
            if ($m >= $G-$g) {
                $m -= ($G-$g);
                $g = $G;
            } else {
                $g += $m;
                $m = 0;
            }
        }
    }
    return [$g,$m];
}
[$k,$g,$m] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$cm = $cg = 0;
for ($i = 0; $i < $k; $i++) {
    [$cg,$cm] = handle($cg,$cm,$g,$m);
// echo $cg .' '.$cm.PHP_EOL;

}
echo $cg .' '.$cm.PHP_EOL;
