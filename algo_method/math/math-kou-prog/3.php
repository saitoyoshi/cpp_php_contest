<?php

[$L,$A] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo floor($L/$A) . PHP_EOL;
