<?php
$txt = "Hello12304j42h21j";
$count = 0;
for ($i=0; $i < strlen($txt); $i++) { 
    if(is_numeric($txt[$i])){
        $count++;
    }
}
echo $count;