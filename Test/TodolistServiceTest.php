<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);


    $todolistService->showTodolist();
}

testShowTodolist();
