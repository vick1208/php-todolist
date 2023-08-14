<?php

namespace Repository;

use Entity\Todolist;

interface TodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $num): bool;
    function getAll(): array;
}
