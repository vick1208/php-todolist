<?php

use Repository\TodoRepoImplement;
use Service\TodoServiceImpl;
use View\TodoView;

include_once __DIR__.'/../Entity/Todolist.php';
include_once __DIR__.'/../Repository/TodolistRepository.php';
include_once __DIR__.'/../Service/TodolistService.php';
include_once __DIR__.'/../View/TodoView.php';
include_once __DIR__.'/../Helper/InputHelper.php';


function testViewShowTodolist(): void
{

    $todolistRepository = new TodoRepoImplement;
    $todolistService = new TodoServiceImpl($todolistRepository);
    $todolistView = new TodoView($todolistService);

    $todolistService->addTodo("Belajar PHP");
    $todolistService->addTodo("Belajar PHP OOP");
    $todolistService->addTodo("Belajar PHP Database");

    $todolistView->showTodo();

}

function testViewAddTodolist(): void
{

    $todolistRepository = new TodoRepoImplement;
    $todolistService = new TodoServiceImpl($todolistRepository);
    $todolistView = new TodoView($todolistService);

    $todolistService->addTodo("Belajar PHP");
    $todolistService->addTodo("Belajar PHP OOP");
    $todolistService->addTodo("Belajar PHP Database");

    $todolistService->showTodo();

    $todolistView->addTodo();

    $todolistService->showTodo();

    $todolistView->addTodo();

    $todolistService->showTodo();

}

function testViewRemoveTodolist(): void
{

    $todolistRepository = new TodoRepoImplement();
    $todolistService = new TodoServiceImpl($todolistRepository);
    $todolistView = new TodoView($todolistService);

    $todolistService->addTodo("Belajar PHP");
    $todolistService->addTodo("Belajar PHP OOP");
    $todolistService->addTodo("Belajar PHP Database");

    $todolistService->showTodo();

    $todolistView->removeTodo();

    $todolistService->showTodo();

    $todolistView->removeTodo();

    $todolistService->showTodo();

}

testViewRemoveTodolist();