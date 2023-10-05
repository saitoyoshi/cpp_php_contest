<?php

[$n,$m] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));

// var_dump($lettersBeginsT);
// var_dump($lettersAfterT);
$lettersBeginsT = substr($t,0,$n);
$lettersAfterT = substr($t,strlen($t)-$n);
$isPre = $s === $lettersBeginsT;
$isSuf = $s === $lettersAfterT;

if ($isPre && $isSuf) {
    echo 0 . PHP_EOL;
} elseif ($isPre && !$isSuf) {
    echo 1 . PHP_EOL;

} elseif ($isSuf && !$isPre) {
    echo 2 . PHP_EOL;

} elseif (!$isPre && !$isSuf) {
    echo 3 . PHP_EOL;

}
