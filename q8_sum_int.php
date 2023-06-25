<?php
$num = 1234;
$sum = 0;
$num .='';
for ($i = 0; $i < strlen($num); $i++) {
    $sum+=$num[$i];
}
echo $sum;
