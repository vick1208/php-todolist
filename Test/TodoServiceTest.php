<?php

use Entity\Todolist;
use Repository\TodoRepoImplement;
use Service\TodoServiceImpl;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";


function testShowTodo(): void
{
    $todoRepo = new TodoRepoImplement();
    $todoRepo->todolist[1] = new Todolist("Belajar PHP");
    $todoRepo->todolist[2] = new Todolist("Belajar PHP Database");
    $todoRepo->todolist[3] = new Todolist("Belajar PHP OOP");
    $todoService = new TodoServiceImpl($todoRepo);

    $todoService->showTodo();
}
function testAddTodo(): void
{
    $todoRepo = new TodoRepoImplement();
    $todoService = new TodoServiceImpl($todoRepo);

    $todoService->addTodo("Belajar PHP");

    $todoService->showTodo();
}

testAddTodo();
