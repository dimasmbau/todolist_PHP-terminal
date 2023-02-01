<?php

require_once "../belajarPHP/todolist/model/todoList.php";
require_once "../belajarPHP/todolist/bisnislogic/showtodolist.php";

// require_once "../model/todoList.php";
// require_once "../bisnislogic/showtodolist.php";

$todolist = [
    1 => "belajar lebih giat",
    2 => "belajar lebih rajin",
    3 => "sampe oyi",
];

// $todolist[1] = "Belajar lebih giat";
// $todolist[2] = "Belajar lebih rajin";
// $todolist[3] = "sampe oyi";

showtodolist();
