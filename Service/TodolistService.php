<?php

namespace Service;

use Repository\TodolistRepository;

interface TodolistService
{
    function showTodo(): void;
    function addTodo(string $todo): void;
    function removeTodo(int $num): void;
}
class TodoServiceImpl implements TodolistService
{

    private TodolistRepository $todolistRepo;

    public function __construct(TodolistRepository $todolistRepo)
    {
        $this->todolistRepo = $todolistRepo;
    }

    public function showTodo(): void
    {

        echo "TO DO LIST" . PHP_EOL;

        $todolist = $this->todolistRepo->findAllItems();

        foreach ($todolist as $number => $value) {
            echo "$number. $value" . PHP_EOL;
        }
    }
    public function addTodo(string $todo): void
    {
    }
    public function removeTodo(int $num): void
    {
    }
}
