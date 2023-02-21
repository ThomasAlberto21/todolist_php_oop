<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Input/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    global $todo_list;
    echo "MENGHAPUS TODO" . PHP_EOL;

    $hapus_todo = (int) input("Nomor (Ketik 3 jika ingin membatalkan)");

    if ($hapus_todo == 3) {
        echo "Menghapus Todo Dibatalkan";
    } else {

        $success = removeTodoList($hapus_todo);

        if ($success) {
            echo "Berhasil menghapus todo nomor $hapus_todo" . PHP_EOL;
        } else if ($hapus_todo != $todo_list) {
            echo "Nomor yang anda masukkan tidak ada di dalam list" . PHP_EOL;
        } else {
            echo "Gagal menghapuus todo nomor $hapus_todo" . PHP_EOL;
        }
    }
}
