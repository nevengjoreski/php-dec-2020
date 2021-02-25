<?php

require_once "models/Student.php";

class TransactionController {

    private $request;
    private $types = ['deposit', 'withdraw'];

    function __construct(){
        $this->request = $_REQUEST;
    }

    function show($id){

        $transactionModel = new Transaction;
        $transaction = $transactionModel->getById($id);
        
        $transactions = [$transaction];
        include 'views/transaction/index.php';
    }

    function index(){
        
        $transactionModel = new Transaction;
        $transactions = $transactionModel->getAll();
        include 'views/transaction/index.php';
    }

    function create(){

        $action = ROOT_URL . 'transaction/insert';
        $button_label = 'Create';

        $studentModel = new Student;
        $students = $studentModel->getAll();

        include 'views/transaction/create_edit.php';
    }

    function insert($param){

        $transactionModel = new Transaction;
        $data = !empty($param) ? $param : $this->request;

        $transactionModel->insert($data);
        //redirect to ROOT_URL
        header("Location: " . ROOT_URL . 'transaction/index');
    }

    function delete($id){

        $transactionModel = new Transaction;
        $transactionModel->delete($id);
        //redirect to ROOT_URL
        header("Location: " . ROOT_URL . 'transaction/index');
    }

    function edit($id){

        $transactionModel = new Transaction;
        $transaction = $transactionModel->getById($id);

        $studentModel = new Student;
        $students = $studentModel->getAll();

        $action = ROOT_URL . 'transaction/update';
        $button_label = 'Update';

        include 'views/transaction/create_edit.php';
    }

    function update($param){

        $data = !empty($param) ? $param : $this->request;

        $transactionModel = new Transaction;
        $transactionModel->update($data);
        
        header("Location: " . ROOT_URL . 'transaction/index');
    }
}