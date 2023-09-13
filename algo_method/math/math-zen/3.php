<?php

[$A,$B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo ($A*$B) . PHP_EOL;
