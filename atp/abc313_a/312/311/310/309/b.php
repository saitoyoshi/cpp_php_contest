<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($A === 1 && $B === 2 || ($A === 2 && ($B === 3)) || ($A === 4 && ($B === 5)) || ($A === 5 && ($B === 6))  || ($A === 7 && $B === 8) || ($A === 8 && $B === 9)) {
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}
