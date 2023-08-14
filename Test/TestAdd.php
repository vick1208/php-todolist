<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodo.php";

addTodo("Anything");
addTodo("At");
addTodo("Once");

var_dump($todoList);

