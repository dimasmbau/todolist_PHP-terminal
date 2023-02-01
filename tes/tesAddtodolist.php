<?php

require_once "../model/todolist.php";
require_once "../bisnislogic/addtodolist.php";

addtodolist("samid");

var_dump($todolist);