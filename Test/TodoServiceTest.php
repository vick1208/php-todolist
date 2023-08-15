<?php

use Repository\TodoRepoImplement;
use Service\TodoServiceImpl;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";


function testShowTodo(): void
{
    $todoRepo = new TodoRepoImplement();
    $todoService = new TodoServiceImpl($todoRepo);

    $todoService->showTodo();
}

testShowTodo();
