<?php


namespace Repository {


    use Entitiy\TodoList;


    interface TodolistRepository
    {

        /* A function that takes a TodoList object as a parameter and returns nothing. */
        function save(TodoList $todoList): void;


        /* A function that takes an integer as a parameter and returns a boolean. */
        function remove(int $number): bool;


        /* A function that takes no parameters and returns an array. */
        function findAll(): array;
    }



    class TodolistRepositoryImpl implements TodolistRepository
    {

        /* Declaring a private variable called `` and initializing it to an empty array. */
        private array $todolist = array();



        /**
         * `save` takes a `TodoList` object and saves it to the database
         * 
         * @param TodoList todoList The TodoList object to be saved.
         */
        function save(TodoList $todoList): void
        {
        }



        /**
         * `remove` takes an integer and returns a boolean
         * 
         * @param int number The number to remove from the list.
         */
        function remove(int $number): bool
        {
        }




        /**
         * This function returns an array of all the todo items
         * 
         * @return array An array of todolist
         */
        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
