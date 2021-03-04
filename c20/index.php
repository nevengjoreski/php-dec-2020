<?php

require_once 'Twig.php';

$template_file = 'studenti.html.twig';

//connection to db and get results

$data = [
    'name' => 'Neven',
    'lastname' => 'Gjoreski',
    'users' => [
        [
            'name' => 'Neven',    
            'lastname' => 'Gjoreski',    
            'email' => 'n.g@hotmail.com'    
        ],
        [
            'name' => 'Stavre',    
            'lastname' => 'Stavreski',    
            'email' => 's.s@hotmail.com'    
        ],
    ]
];

echo $twig->render( $template_file , $data);