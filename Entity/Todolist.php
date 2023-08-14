<?php

namespace Entity;

class Todolist
{
    private string $todo;

    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }

    public function getTodo()
    {
        return $this->todo;
    }

    public function setTodo($todo)
    {
        $this->todo = $todo;
    }
}
