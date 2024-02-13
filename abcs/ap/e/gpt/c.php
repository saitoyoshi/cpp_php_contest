<?php

$N = 3;
$line1 = "The quick brown fox jumps over the lazy dog. ID1234 is the key.";
$line2 = "ABCD5678 is another example. XYZ999 is the last one.";
$line3 = "The password for the account is Password1234. Don't forget the number.";
$arr = [$line1,$line2,$line3];
$pat = "/[A-Za-z]+\d{2,4}/";
for ($i = 0; $i < $N; $i++) {
    // echo preg_match($pat,$arr[$i]) . PHP_EOL;;
    if (preg_match($pat,$arr[$i],$matches)) {
        echo "matched: " .$matches[0] . PHP_EOL;
    }
}
