<?php
    $txt = 'OoredOo';
    $t1 = substr($txt,0,2);
    $t2 = substr($txt,strlen($txt)-2,2);
    echo ($t1 == $t2)?'true':'false';