<?php

require_once "../bisnislogic/removetodolist.php";
require_once "../helper/input.php";

function viewRemovetodolist()
{
    echo " ---Menu hapus---" . PHP_EOL;

    $hapus = input("Pilih nomer yang akan dihapus ");

    removetodolist($hapus);

}
