<?php

require_once "model/todolist.php";
require_once "bisnislogic/showtodolist.php";
require_once "bisnislogic/addtodolist.php";
require_once "bisnislogic/removetodolist.php";
require_once "view/viewShowtodolist.php";
require_once "view/viewAddtodolist.php";
require_once "view/viewRemovetodolist.php";

echo "Aplikasi To Do List".PHP_EOL ;

$todolist = [
                1 => "Belajar lebih giat",
                2 => "Beribadah tepat waktu",
                3 => "Berdoa"
];

showtodolist(); 