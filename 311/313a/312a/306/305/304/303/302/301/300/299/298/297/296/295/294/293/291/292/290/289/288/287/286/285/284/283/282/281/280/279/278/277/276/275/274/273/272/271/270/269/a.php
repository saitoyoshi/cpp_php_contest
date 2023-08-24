<?php

[$a,$b,$c,$d] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo (($a+$b) * ($c-$d)) . PHP_EOL;
echo 'Takahashi' . PHP_EOL;
