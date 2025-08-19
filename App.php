<!-- Entripoint aplikasi dijalankan -->

<?php

// include file lain
require_once "model/TodoList.php";
require_once "businessLogic/ShowTodoList.php";
require_once "businessLogic/AddTodoList.php";
require_once "businessLogic/RemoveTodoList.php";
require_once "view/ViewShowTodoList.php";
require_once "view/ViewAddTodoList.php";
require_once "view/ViewRemoveTodoList.php";

echo "Aplikasi TodoList" . PHP_EOL;
