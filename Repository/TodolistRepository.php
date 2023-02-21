<?php


namespace Repository {

    /* Importing the TodoList class from the Entitiy namespace. */
    use Entitiy\TodoList;


    /* Creating an interface called TodolistRepository. */
    interface TodolistRepository
    {

        /* A function that takes a TodoList object as a parameter and returns nothing. */
        function save(TodoList $todoList): void;


        /* A function that takes an integer as a parameter and returns a boolean. */
        function remove(int $number): bool;


        /* A function that takes no parameters and returns an array. */
        function findAll(): array;
    }
}
