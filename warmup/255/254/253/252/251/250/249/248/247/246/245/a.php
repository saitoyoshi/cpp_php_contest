<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$takahashiUnix = strtotime($A . ':' . $B . ':0');
$aokiUnix = strtotime($C . ':' . $D . ':1');
if ($takahashiUnix > $aokiUnix) {
    echo 'Aoki' . PHP_EOL;
} else {
    echo 'Takahashi' . PHP_EOL;
}
