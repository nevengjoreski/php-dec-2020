<?php

$string_as_json = '
    {
        "name" : "Neven",
        "lastname" : "Gjoreski",
        "age" : 33,
        "languages" : [
            "PHP", "JavaScript", "SQL"
        ]
    }
';

$json_object = json_decode($string_as_json);

echo '<pre>';
print_r($json_object);
echo '</pre>';

echo $json_object->languages[1]; //JavaScript

$json_array = json_decode($string_as_json , true);

echo '<pre>';
print_r($json_array);
echo '</pre>';
echo $json_array['languages'][1]; //JavaScript


$string_as_json_2 = '
{
    "studenti" : [
        {
            "name" : "Neven",
            "lastname" : "Gjoreski",
            "age" : 33,
            "languages" : [
                "PHP", "JavaScript", "SQL"
            ]
        },
        {
            "name" : "Albert",
            "lastname" : "Ajnshtajnus",
            "age" : 101,
            "languages" : [
                "Pascal", "VisualBasic", "C"
            ]
        }
    ]
}
';
echo '<hr><hr><hr>';

$json_array2 = json_decode($string_as_json_2 , true);
echo '<pre>';
print_r($json_array2);
echo '</pre>';

// Studentot Neven Gjoreski  gi znae : PHP JavaScript SQL,
// Studentot Albert Ajnshtajnus gi znae : Pascal VisucalBasic C

foreach($json_array2['studenti'] as $student){
    echo '<pre>';
    print_r($student);
    echo '</pre>';

    echo "Studentot {$student['name']} {$student['lastname']} 
        gi znae : " . implode( ' ' , $student['languages']);
}


$studenti = [
    [
        "name" => "Neven",
        "lastname" => "Gjoreski",
        "age" => 33,
        "languages" => [
            "PHP", "JavaScript", "SQL"
        ] 
    ],
    [
        "name" => "Albert",
        "lastname" => "Ajnshtajnus",
        "age" => 101,
        "languages" => [
            "Pascal", "VisualBasic", "C"
        ]
    ]
];


echo '<pre>';
print_r($studenti);
echo '</pre>';

echo json_encode($studenti);

