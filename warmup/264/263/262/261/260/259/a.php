<?php

[$N,$M,$X,$T,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
if ($X <= $M) {
    echo $T . PHP_EOL;
    exit;
}
echo $T - ($X-$M)*$D . PHP_EOL;
