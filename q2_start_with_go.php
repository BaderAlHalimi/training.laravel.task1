<?php
    $txt = 'Go to school';
    $t1 = substr($txt,0,2);
    echo($t1 == 'Go')?'true':'false';

    //another solution
    echo '<br>';

    echo ($txt[0].$txt[1] == 'Go')?'true':'fasle';