<?php

// Todo menampilkan todo di list
function showTodoList()
{
    global $todo_list;

    echo "TODO LIST" . PHP_EOL;

    foreach ($todo_list as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
