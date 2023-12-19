<?php

[$t,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo ($t/$x) . PHP_EOL;
