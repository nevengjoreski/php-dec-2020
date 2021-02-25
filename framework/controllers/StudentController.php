<?php

class StudentController {

    private $request;

    function __construct(){
        $this->request = $_REQUEST;
    }

    function show($id){

        $studentModel = new Student;
        $student = $studentModel->getById($id);
        
        $students = [$student];
        include 'views/student/index.php';
    }

    function index(){

        $studentModel = new Student;
        $students = $studentModel->getAll();
        include 'views/student/index.php';
    }

    function create(){

        $action = ROOT_URL . 'student/insert';
        $button_label = 'Create';

        include 'views/student/create_edit.php';
    }

    function insert($param){

        $studentModel = new Student;
        $data = !empty($param) ? $param : $this->request;

        $studentModel->insert($data);
        //redirect to ROOT_URL
        header("Location: " . ROOT_URL . 'student/index');
    }

    function delete($id){

        $studentModel = new Student;
        $studentModel->delete($id);
        //redirect to ROOT_URL
        header("Location: " . ROOT_URL . 'student/index');
    }

    function edit($id){

        $studentModel = new Student;
        $student = $studentModel->getById($id);

        $action = ROOT_URL . 'student/update';
        $button_label = 'Update';

        include 'views/student/create_edit.php';
    }

    function update($param){

        $data = !empty($param) ? $param : $this->request;

        $studentModel = new Student;
        $studentModel->update($data);
        
        header("Location: " . ROOT_URL . 'student/index');
    }
}