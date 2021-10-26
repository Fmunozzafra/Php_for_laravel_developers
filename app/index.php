<?php


use Framework\App;
use Framework\Database\Database;

require 'app/helpers.php';


//$database = new Database(App::get('config')['database']); //Laravel no utilitzem gairebé mai new -> DI i Container
$tasks = App::get('database')->selectAll('tasks');
//$tasks = Database::selectAll('tasks'); // Crida estàtica -> sense new
//$tasks = Task::selectAll('tasks'); -> Laravel Eloquent

$greeting = greet();

