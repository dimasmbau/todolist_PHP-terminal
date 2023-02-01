<?php

require_once "../belajarPHP/todolist/model/todolist.php";
require_once "../belajarPHP/todolist/bisnislogic/addtodolist.php";
require_once "../belajarPHP/todolist/bisnislogic/showtodolist.php";
require_once "../belajarPHP/todolist/bisnislogic/removetodolist.php";

addtodolist("istimewa");
addtodolist("istimewa lek");
addtodolist("istimewa lah lek");
addtodolist("istimewa lah leeeek");

showtodolist();

$cek = removetodolist(7);

var_dump($cek);

// showtodolist();

// $cek = cekBool(1);
// var_dump($cek);