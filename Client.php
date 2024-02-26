<?php
//Host: http://localhost:8080/project-1/client.php
    $database = new mysqli(
        "localhost",
        "root",
        "usbw",
        "test",
        3307
    );

//  Create User`s and yours tables
    $createUser = "CREATE TABLE client(
        `id` int auto_increment,
        `firstName` varchar(25),
        `lastName` varchar(25) not null,
        `email` varchar(40),
        `wage` float(7,2),
        primary key (`id`)
    )";

    //  Clean table
        $cleanTable = "TRUNCATE TABLE client";
        $database->query($cleanTable);

    //  Create Users in For (Loop) and put a Random wage
        for ($i=1; $i <= 10000000; $i++) {
            $wage = rand(1, 10);
            $insertUser = "INSERT INTO client(firstName,wage) VALUES ('Joao', $wage * 1412.00)";
            $database->query($insertUser);
            
        }
        $database->query($createUser);
        
    
?>
