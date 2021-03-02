<?php

class UserController {

    private $request;

    function __construct(){
        $this->request = $_REQUEST;
    }

    function create(){

        $action = ROOT_URL . 'user/insert';
        $button_label = 'Create';

        require_once 'views/user/create.php';
    }

    function insert($param){

        $userModel = new User;
        $data = !empty($param) ? $param : $this->request;

        $userModel->insert($data);
        //redirect to ROOT_URL
        header("Location: " . ROOT_URL );
    }
}