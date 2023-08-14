<?php 

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/RemoveTodo.php";
require_once "../BusinessLogic/AddTodo.php";
require_once "../BusinessLogic/ShowTodo.php";

addTodo("Eko");
addTodo("Kurniawan");
addTodo("Khannedy");
addTodo("Richard");
addTodo("Yulia");

showTodo();

removeTodo(3);
showTodo();


removeTodo(2);

showTodo();

$success = removeTodo(4);
var_dump($success);

showTodo();



