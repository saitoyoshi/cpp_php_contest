<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo ($B/$A) . PHP_EOL;
