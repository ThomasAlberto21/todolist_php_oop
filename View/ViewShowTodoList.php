<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Input/Input.php";


function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;


        $pilihan_user = input("Pilih");


        if ($pilihan_user == "1") {
             viewAddTodoList();
        } else if ($pilihan_user == "2") {
            viewRemoveTodoList();
        } else if ($pilihan_user == "3") {
            break;
        } else {
            echo "Menu yang anda masukkan tidak ada" . PHP_EOL;
        }
    }
    echo "Terima Kasih sudah menggunakan aplikasi saya" . PHP_EOL;
}
