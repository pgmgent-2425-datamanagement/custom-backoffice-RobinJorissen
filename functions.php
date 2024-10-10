<?php
include 'models/User.php';

function getUsers($users) {

    //1. connectie maken met database
    $db = new PDO('mysql:host=db;dbname=db', 'db', 'db');

    //2. SQL query schrijven
    $sql = "
            SELECT * 
            FROM users
            ";

    //3. SQL statement voorbereiden
    $statement = $db->prepare($sql);

    //4. Parameters binden en uitvoeren
    //$v_search = '%' . $p_search . '%';
    //$statement->bindParam(':b_search', $v_search, PDO::PARAM_STR);
    //$statement->execute();

    //5. SQL statement uitvoeren
    $statement->execute(
        [
            'b_search' => '%' . $users . '%'
        ]
    );
    

    //Data fetchen and casten naar Course class
    $users = $statement->fetchAll(PDO::FETCH_CLASS, 'User');
    
    return $users;

}