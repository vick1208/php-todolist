<?php

namespace View;

use Helper\InputHelper;
use Service\TodolistService;

class TodoView
{
    private TodolistService $todoService;
    public function __construct(TodolistService $todoService)
    {
        $this->todoService = $todoService;
    }
    function showTodo(): void
    {
        while (true) {
            $this->todoService->showTodo();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = input("Pilih");

            if ($pilihan == "1") {
                viewAddTodo();
            } else if ($pilihan == "2") {
                viewRemoveTodo();
            } else if ($pilihan == "x") {
                break;
            } else {
                echo "Pilihan tidak dimengerti" . PHP_EOL;
            }
        }

        echo "Sampai Jumpa Lagi" . PHP_EOL;
    }
    function addTodo(): void
    {
        echo "MENAMBAH TODO" . PHP_EOL;

        $todo = InputHelper::input("Todo (x untuk batal)");

        if ($todo == "x") {
            echo "Batal menambah todo" . PHP_EOL;
        } else {
            $this->todoService->addTodo($todo);
        }
    }
    function removeTodo(): void
    {
        echo "MENGHAPUS TODO" . PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk batalkan)");
    
        if ($pilihan == "x") {
            echo "Batal menghapus todo" . PHP_EOL;
        } else {
           $this->todoService->removeTodo($pilihan);
        }
    }
}
