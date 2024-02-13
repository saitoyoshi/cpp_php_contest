<?php

$text = "This is a PHP test.
PHP is a server-side scripting language.
Welcome to PHP world.";

$pat = "/PHP/";

var_dump(preg_match($pat,$text));
