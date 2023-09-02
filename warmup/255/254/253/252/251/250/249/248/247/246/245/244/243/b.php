<?php

[$V,$A,$B,$C] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$V = $V % ($A + $B + $C);
if ($V < $A) {
    echo 'F' . PHP_EOL;
} elseif ($V < $A + $B) {
    echo 'M' . PHP_EOL;
} else {
    echo 'T' . PHP_EOL;
}
