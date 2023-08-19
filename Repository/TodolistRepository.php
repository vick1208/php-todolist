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
    public array $todolist = [];
    public function save(Todolist $todolist): void
    {
        $num = sizeof($this->todolist) + 1;
        $this->todolist[$num] = $todolist;
    }
    public function remove(int $num): bool
    { 
        if ($num >sizeof($this->todolist)) {
        return false;
    }

    for ($i = $num; $i < sizeof($this->todolist); $i++) {
        $this->todolist[$i] = $this->todolist[$i + 1];
    }
    unset($this->todolist[sizeof($this->todolist)]);

    return true;
    }
    public function findAllItems(): array
    {
        return $this->todolist;
    }
}
