<?php


namespace Service {

    use Entitiy\TodoList;
    use Repository\TodolistRepository;

    interface TodolistService
    {
        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }



    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }





        function showTodolist(): void
        {
            echo "TODO LIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number." .  $value->getTodo() . PHP_EOL;
            }
        }




        function addTodolist(string $todo): void
        {
            $todolist = new TodoList($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAHKAN TODO LIST" . PHP_EOL;
        }




        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODO LIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODO LIST" . PHP_EOL;
            }
        }
    }
}
