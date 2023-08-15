<?php

namespace Service;

use Entity\Todolist;
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
            echo "$number.". $value->getTodo() . PHP_EOL;
        }
    }
    public function addTodo(string $todo): void
    {
        $todolist = new Todolist($todo);
        $this->todolistRepo->save($todolist);

        echo "To do list telah ditambahkan" . PHP_EOL;
    }
    public function removeTodo(int $num): void
    {
    }
}
