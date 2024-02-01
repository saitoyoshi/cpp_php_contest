<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));

function seq1($n,$A,$B) {
    return ($A+($n-1)*$B);
}
function seq2($n,$C,$D) {
    return $D*$C*($n-1);
}
for ($i = 1; $i <= 1000000; $i++) {
    // echo seq1($i,$A,$B) . PHP_EOL;
    // echo seq2($i,$C,$D) . PHP_EOL;
    if (seq1($i,$A,$B) <= seq2($i,$C,$D)) {
        echo ($i-1) . PHP_EOL;
        exit;
    }
}
echo -1 . PHP_EOL;
