<?php
$numa = 50;
$numb = 59;
$num1 = abs(100-$numa);
$num2 = abs(100-$numb);
$num3 = ($num1<$num2)?$numa:$numb;
echo ($num1==$num2)?0:$num3;