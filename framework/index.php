<?php
session_start();
$default = [
    'controller' => 'student',
    'method' => 'index',
    'id' => '',
];

$parameters =   isset($_GET['parameters'])          ?
                explode( '/', $_GET['parameters'])  :
                [];

switch(count($parameters)){
    case 0:
        $controller = $default['controller'];
        $method     = $default['method'];
        $id         = $default['id'];
        break;
    case 1:
        $controller = $parameters[0];
        $method     = $default['method'];
        $id         = $default['id'];
        break;
    case 2:
        $controller = $parameters[0];
        $method     = $parameters[1];
        $id         = $default['id'];
        break;
    case 3:
        $controller = $parameters[0];
        $method     = $parameters[1];
        $id         = $parameters[2];
        break;
    default:
        die('Vesovte premnogu parametri');
}
// student/show/1 za konkreten student
// student/index   za site studenti

// CONTROLLER ( MODEL ) / METHOD ( ACTION ) / ID ( IF AVAILABLE)
// controller/method/id



$filename = ucfirst($controller);
$controller_filename    = "controllers/{$filename}Controller.php";  // controllers/StudentController.php
$model_filename         = "models/{$filename}.php";                 // models/Student.php

if(file_exists($controller_filename) && file_exists($model_filename)){
    require_once $controller_filename;
    require_once $model_filename;
    require_once '_includes/db_connection.php';
    require_once '_includes/general_functions.php';
    require_once '_includes/variables.php';

    // TODO: AUTHENTICATE USER 

    $controller_name = $filename . 'Controller'; // StudentController
    $object = new $controller_name; // $object = new StudentController

    if(method_exists($object , $method)){
        $object->$method($id);          // $object->index($id)
    } else {
        die('Povikavte nepostoecki metod');
    }

} else {
    die('Povikavte nepostoecki fajlovi ( controller / model ) ');
}


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">