<?php
function dd($var)
{  
    print('<i>');
    var_dump($var);
    print('</i>');
    die();
}
//dd("test");

$identities = [
    [
        "name" => "Leriche",
        "surname" => "Ludovic",
        "age" => 22,
    ],
    [
        "name" => "Kaka",
        "surname" => "Pedro",
        "age" => 28,
    ],
    [
        "name" => "Testnom",
        "surname" => "Tetprenom",
        "age" => 15,
    ],
];

foreach($identities as $key => $value){
    if($value["age"] >= 18){
        echo('Bonjour '. $value["name"] . ' , tu es majeur car tu as '. $value["age"] .' ans</br>');
    
    } else {
        echo('Bonjour '. $value["name"] . ' , tu es mineur car tu as '. $value["age"] .' ans</br>');
    }
}

//USERS
$users = [
    [
        "username" => "Jin",
        "password" => "1234",
    ],
    [
        "username" => "Jean",
        "password" => "2341",
    ],
    [
        "username" => "Jeen",
        "password" => "3412",
    ],
]


?>