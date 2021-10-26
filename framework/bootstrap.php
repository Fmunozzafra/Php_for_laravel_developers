<?php


use Framework\App;
use Framework\Database\Database;
use Framework\Database\Connection;
//Laravel service provider
App::bind('config', require 'config.php');

App::bind('database', new Database(
        Connection::make(App::get('config')['database'])
));
