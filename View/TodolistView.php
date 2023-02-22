<?php


namespace View {

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }




        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "3. Keluar" . PHP_EOL;


                $pilihan_user = InputHelper::input("Pilih");


                if ($pilihan_user == "1") {
                    $this->addTodolist();
                } else if ($pilihan_user == "2") {
                    $this->removeTodolist();
                } else if ($pilihan_user == "3") {
                    break;
                } else {
                    echo "Menu yang anda masukkan tidak ada" . PHP_EOL;
                }
            }
            echo "Terima Kasih sudah menggunakan aplikasi saya" . PHP_EOL;
        }


        function addTodolist(): void
        {
            echo "MASUKKAN TODO" . PHP_EOL;

            $tambah_todo = InputHelper::input("Masukkan Todo (Ketik 3 untuk batal)");

            if ($tambah_todo == "3") {
                echo "Batal Menambahkan Todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($tambah_todo);
            }
        }


        /**
         * It removes the todolist.
         */
        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $hapus_todo = (int) InputHelper::input("Nomor (Ketik 3 jika ingin membatalkan)");

            if ($hapus_todo == 3) {
                echo "Menghapus Todo Dibatalkan" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($hapus_todo);
            }
        }
    }
}
