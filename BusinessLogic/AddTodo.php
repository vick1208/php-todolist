<?php

/**
 * Menambah to do di list
 */

function addTodo(string $todo)
{
    global $todoList;
    
    $num = sizeof($todoList) + 1;

    $todoList[$num] = $todo;

}
