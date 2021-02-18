<?php

echo $_REQUEST['parameters'];

$parameters =   isset($_GET['parameters'])          ?
                explode( '/', $_GET['parameters'])  :
                [];

$controller = $parameters[0];
$method     = $parameters[1];
$id         = $parameters[2];

// TODO: Add validation to $parameters


// student/show/1 za konkreten student
// student/show   za site studenti

// CONTROLLER ( MODEL ) / METHOD ( ACTION ) / ID ( IF AVAILABLE)
// cont/meth/id

require_once '_includes/db_connection.php';

$filename = ucfirst($controller);
$controller_filename    = "controllers/{$filename}Controller.php";  // controllers/StudentController.php
$model_filename         = "models/{$filename}.php";                 // models/Student.php

require_once $controller_filename;
require_once $model_filename;

$studentController = new StudentController;
$studentController->show();