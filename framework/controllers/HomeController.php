<?php
require_once("models/Transaction.php");
require_once("models/Student.php");

class HomeController {

    // function index(){

    //     include_once 'views/home/index.php';
    // }

    function index(){

        $transactionModel = new Transaction;
        $transactions = $transactionModel->getAll();

        $studentModel = new Student;
        $students = $studentModel->getAll();

        $displayTransacitions = false;
        

        include 'views/home/index.php';

        include 'views/student/index.php';
        include 'views/transaction/index.php';

    }
}