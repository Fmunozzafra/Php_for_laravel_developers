<?php

use Framework\App;

require 'vendor/autoload.php';

require 'framework/bootstrap.php';

/* $routes = [
    //MAPEIG URL
    'https://localhost:8080/contact' => 'app/Http/Controllers/contact.php',
    'https://localhost:8080/about' => 'app/Http/Controllers/about.php',
    'https://localhost:8080/tasks' => 'app/Http/Controllers/tasks.php'

]; */


//require 'app/index.php';

//require 'resources/views/index.blade.php';

App::get('router')->redirect($_SERVER['REQUEST_URI']);