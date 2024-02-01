<?php

$candidates = [1,2,3,4,5];
[$H,$W] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$canvas = [];
for ($i = 0; $i < $H; $i++) {
    $canvas[]  = trim(fgets(STDIN));
}
// var_dump($canvas);exit;
for ($i = 0; $i < $H; $i++) {
    for ($j = 0; $j < $W; $j++) {
        if ($canvas[$i][$j] === '.') {
            $candidates = check($canvas,$i,$j);
            // var_dump($candidates);
            if (count($candidates) === 0) {
                echo $i.' '.$j. PHP_EOL;
            } else {

                // $canvas[$i][$j] = (string)$candidates[array_rand($candidates)];
                // var_dump($candidates);
                $canvas[$i][$j] = (string)reset($candidates);
            }
        }
    }
    echo $canvas[$i] . PHP_EOL;
}

// var_dump($canvas);
function check($a,$y,$x) {
    $t = [1,2,3,4,5];
    $exists = [];
    if (isset($a[$y][$x-1])) {
        $exists[] = (int)$a[$y][$x-1];
    }
    if (isset($a[$y][$x+1])) {
        $exists[] = (int)$a[$y][$x+1];
    }
    if (isset($a[$y+1][$x])) {
        $exists[] = (int)$a[$y+1][$x];
    }
    if (isset($a[$y-1][$x])) {
        $exists[] = (int)$a[$y-1][$x];
    }
    return array_diff($t,$exists);

}
