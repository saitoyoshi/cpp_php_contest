<?php

$N = (int) fgets(STDIN);
for ($i = 0; $i < $N; $i++) {
    [$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    echo ($A+$B) . PHP_EOL;
}
