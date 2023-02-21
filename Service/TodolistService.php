<?php


namespace Service {


    /* Creating a new interface called TodolistService. */
    interface TodolistService
    {
        /* A function that shows the todolist. */
        function showTodolist(): void;

        /* A function that adds a todolist. */
        function addTodolist(string $todo): void;

        /* Removing the todolist. */
        function removeTodolist(int $number): void;
    }
}
