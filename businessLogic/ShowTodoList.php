<?php

/* 
    Menampilkan todo di list
*/

function showTodoList()
{
    // global scope
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    // menampilkan list todo
    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
