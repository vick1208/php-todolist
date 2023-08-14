<?php

namespace Repository;

use Entity\Todolist;

interface TodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $num): bool;
    function findAllItems(): array;
}

class TodoRepoImplement implements TodolistRepository
{ 
    private array $todolist;
    public function save(Todolist $todolist): void
    {
    }
    public function remove(int $num): bool
    {
        return true;
    }
    public function findAllItems(): array
    {
        return $this->todolist;;
    }
}
