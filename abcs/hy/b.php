<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if (($C*$D-$B) <= 0) {
    echo -1 . PHP_EOL;exit;
}
echo ceil($A / ($C*$D-$B)) . PHP_EOL;
