<?php

function showtodolist(){
    
    global $todolist;

    echo "------TO DO LIST------" .PHP_EOL;
    
    foreach ($todolist as $nomer => $list) {
        echo "$nomer. $list" .PHP_EOL;
    }

}



