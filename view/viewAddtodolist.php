<?php

require_once "../model/todolist.php";
require_once "../bisnislogic/addtodolist.php";
require_once "../helper/input.php";

function viewAddtodolist()
{
    echo " Menu Tambah" . PHP_EOL;

    $masukkan = input("Masukkan Todo ");

    addtodolist($masukkan);
}
