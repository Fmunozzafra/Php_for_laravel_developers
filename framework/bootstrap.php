<?php


use Dotenv\Dotenv;
use Framework\App;
use Framework\Database\Database;
use Framework\Database\Connection;

$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

App::bind('config', require 'config.php');

App::bind('database', new Database(
        Connection::make(App::get('config')['database'])
));

