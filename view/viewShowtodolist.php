<?php

require_once "../model/todolist.php";
require_once "../bisnislogic/showtodolist.php";
// require_once "../bisnislogic/addtodolist.php";
require_once "../view/viewAddtodolist.php";
require_once "../view/viewRemovetodolist.php";
require_once "../helper/input.php";

function viewShowtodolist()
{
    
    while (true) {
    
        showtodolist();

        echo "----Menu---- " . PHP_EOL;
        echo "1. Tambah Menu " . PHP_EOL;
        echo "2. Hapus Menu " . PHP_EOL;
        echo "x. Keluar " . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddtodolist();
        } else if ($pilihan == "2") {
            viewRemovetodolist();
        } else if ($pilihan == "x") {
            break;
            echo "sampai jumpa kembali" . PHP_EOL;
        } else {
            echo "Pilihan Tidak di Mengerti" . PHP_EOL;
        }
    }
    echo "sampai jumpa kembali";
} 
