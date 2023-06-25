<?php
$number = 6;
if ($number > 0) {
    echo ($number % 3 == 0 || $number % 7 == 0) ? 'true' : 'false';
} else {
    echo 'this number is negative';
}
