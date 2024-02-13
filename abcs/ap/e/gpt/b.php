<?php

// $N = (int) trim(fgets(STDIN));
$N = 3;
$texts = ["This is a test sentence with an email address example@example.com.
", "Another sentence with no email address.
","Please contact me at myemail@example.org if you have any questions.
"];
for ($i = 0; $i < $N; $i++) {
    $pat = "/[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}/";
    if (preg_match($pat,$texts[$i],$matches)) {
        echo "matched: " . $matches[0] . PHP_EOL;
    }
}
