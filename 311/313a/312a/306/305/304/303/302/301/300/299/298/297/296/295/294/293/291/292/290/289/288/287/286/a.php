<?php

[$N,$P,$Q,$R,$S] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$B = $A = array_map('intval',explode(" ", trim(fgets(STDIN))));
for ($i = 0; $i < $Q-$P+1; $i++) {
    $B[$P-1+$i] = $A[$R-1+$i];
}
for ($i = 0; $i < $Q-$P+1; $i++) {
    $B[$R-1+$i] = $A[$P-1+$i];
}
echo implode(" ", $B) . PHP_EOL;
