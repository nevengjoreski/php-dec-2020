<?php

function br(){
    echo '<br>';
}

require "student.class.php";

// printName();

br();
$student = new Student( 'Neven', 'n.g@gmail.com', '077788994');
$student->name = 'Stavre';
// $student->email = 'n.g@gmail.com';
// $student->phone = '077788994';
// $student->cache = 1000000;
$student->setCache(1000000);

// $student->printName();
// $student->printFullName();
pre($student);
echo $student->getCache();
br();



$student2 = new Student('Damjan' , 'd.g@hotmail.com', '072345786');
// $student2->name = 'Damjan';
// $student2->email = 'd.g@hotmail.com';
// $student2->phone = '072345786';
// $student2->setCache(100000000);
// $student2->printFullName();
pre($student2);
// echo $student2->cache;
echo $student2->getCache();
echo $student2->name;


br();

echo "Number of instances : " . Student::$no_of_instances++;
echo "Number of instances : " . Student::$no_of_instances;