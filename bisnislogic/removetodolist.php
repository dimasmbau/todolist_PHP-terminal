<?php

function removetodolist(int $number): bool
{
    
    global $todolist;

    if ($number > sizeof($todolist)) {
        return false;
    }

        for ($i=$number; $i < sizeof($todolist) ; $i++) { 
            $todolist[$i] = $todolist[$i + 1];
        }
        unset($todolist[sizeof($todolist)]);

        return true;
}

function cekBool(int $number): bool
{
    if ($number > 4) {
        return false;
    }

    return true;
}