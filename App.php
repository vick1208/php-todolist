<?php


require_once __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/BusinessLogic/ShowTodo.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodo.php";
require_once __DIR__ . "/BusinessLogic/AddTodo.php";
require_once __DIR__ . "/View/ViewShow.php";
require_once __DIR__ . "/View/ViewAdd.php";
require_once __DIR__ . "/View/ViewRemove.php";
require_once __DIR__ . "/Helper/Input.php";



echo "Aplikasi To do list" . PHP_EOL;

viewShowTodo();
