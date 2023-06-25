<?php
$text = "!dlroW olleH";
$txt1 = '';
for ($i=strlen($text)-1; $i >=0 ; $i--) { 
    $txt1 .= $text[$i];
}
echo $txt1;