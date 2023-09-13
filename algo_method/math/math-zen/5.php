<?php

[$A,$B,$C,$D] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo (($A * $C) + ($B * $D)) . PHP_EOL;
