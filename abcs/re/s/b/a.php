<?php

[$tHp,$tAtk,$aHp,$aAtk] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// var_dump((int)ceil($aHp/$tAtk));
// var_dump((int)ceil($tHp/$aAtk));
$tTimes = ((int)ceil($aHp/$tAtk));
$aTimes = ((int)ceil($tHp/$aAtk));
if (($tTimes-1) >= $aTimes) {
    echo 'No' . PHP_EOL;
} else {
    echo 'Yes' . PHP_EOL;
}
