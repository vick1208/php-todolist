<?php

require_once "../Model/Todolist.php";
require_once "../View/ViewRemove.php";
require_once "../BusinessLogic/AddTodo.php";
require_once "../BusinessLogic/ShowTodo.php";

addTodo("Eko");
addTodo("Kurniwan");
addTodo("Khannedy");

showTodo();

viewRemoveTodo();

showTodo();