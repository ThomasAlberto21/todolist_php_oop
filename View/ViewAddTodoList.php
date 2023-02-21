<?php

require_once  __DIR__ . "/../Input/Input.php";
require_once  __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once  __DIR__ . "/../View/ViewAddTodoList.php";

function viewAddTodoList()
{
    echo "MASUKKAN TODO" . PHP_EOL;

    $tambah_todo = input("Masukkan Todo (Ketik 3 untuk batal)");

    if ($tambah_todo == "3") {
        echo "Batal Menambahkan Todo" . PHP_EOL;
    } else {
        addTodoList($tambah_todo);
    }
}
