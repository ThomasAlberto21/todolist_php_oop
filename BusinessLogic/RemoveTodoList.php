<?php

// Todo menghapus todo  di list
function removeTodoList(int $number)
{
    global $todo_list;

    if ($number > sizeof($todo_list)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todo_list); $i++) {
        $todo_list[$i] = $todo_list[$i + 1];
    }

    unset($todo_list[sizeof($todo_list)]);

    return true;
}
