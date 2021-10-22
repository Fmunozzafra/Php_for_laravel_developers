<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

//fetchAllTasks
$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();

