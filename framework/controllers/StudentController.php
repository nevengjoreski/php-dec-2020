<?php

class StudentController {

    function show(){

        // error_reporting(0);
        $studentModel = new Student;
        $student = $studentModel->getById();
        
        include 'views/student/index.php';
    }
}