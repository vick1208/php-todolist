<?php

/**
 * Menampilkan todo di list
 */
function showTodo()
{
    global $todoList;

    echo "TO DO LIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
