<?php


namespace Service {

    use Repository\TodolistRepository;

    interface TodolistService
    {
        /* A function that shows the todolist. */
        function showTodolist(): void;

        /* A function that adds a todolist. */
        function addTodolist(string $todo): void;

        /* A function that remove the todolist. */
        function removeTodolist(int $number): void;
    }



    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;


        /**
         * The constructor function is a special function that is called when an object is created from
         * a class
         * 
         * @param TodolistRepository todolistRepository This is the name of the class that we want to
         * inject.
         */
        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }




        /**
         * It shows the todolist.
         */
        function showTodolist(): void
        {
            echo "TODO LIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }



        /**
         * `addTodolist` adds a todo list
         * 
         * @param string todo The todo item to add to the list.
         */
        function addTodolist(string $todo): void
        {
        }



        /**
         * This function removes a todo list from the database
         * 
         * @param int number The number of the todolist to remove.
         */
        function removeTodolist(int $number): void
        {
        }
    }
}
