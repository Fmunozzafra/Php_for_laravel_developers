<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

$tasks = fetchAllTasks(connectDB($config));

$greeting = greet();

