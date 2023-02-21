<?php

require_once __DIR__ ."/../Model/TodoList.php";

// Todo menambahkan todo di list
function addTodoList(string $todo)
{
    global $todo_list;

    $number = sizeof($todo_list) + 1;
    $todo_list[$number] = $todo;
}
