<?php 

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodo.php";
require_once __DIR__ . "/../View/ViewAdd.php";
require_once __DIR__ . "/../View/ViewRemove.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodo() {
    while (true) {
        showTodo();

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