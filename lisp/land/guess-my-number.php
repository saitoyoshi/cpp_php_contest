<?php

// 推測し、数値を返す
// 大きいかと聞く
//　小さいという
// 初期化する
$small = 1;
$big = 100;
echo guessMyNumber() . PHP_EOL;
while (1) {
    echo ">>>";
    $input = trim(fgets(STDIN));
    if ($input === "s") {
        echo smaller() . PHP_EOL;
    } elseif ($input === "c") {
        echo startOver() . PHP_EOL;;
    } elseif ($input === "q" || $input === "e") {
        exit;

    } else {
        echo bigger() . PHP_EOL;
    }
}

function guessMyNumber() {
    global $small;
    global $big;
    $guess = (int)floor(($small + $big) / 2);
    return $guess;
}
function smaller() {
    global $big;
    $big = guessMyNumber()-1;
    return guessMyNumber();
}
function bigger() {
    global $small;
    $small = guessMyNumber()+1;
    return guessMyNumber();
}
function startOver() {
    global $small;
    global $big;
    $small = 1;
    $big = 100;
    return guessMyNumber();
}
