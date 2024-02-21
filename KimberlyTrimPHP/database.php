<?php
    $dsn = 'mysql:host=localhost; dbname=kimberlytrimdatabase';
    $username = 'kimberlytrim';
    $password = 'kimberlytrimpass';

    try {
        $db = new PDO ($dsn, $username, $password);
//        echo '<p> You are connected to the database!</p>';
    } catch (PDOException $e){
        $error_message = $e->getMessage();
        include ('database_error.php');
        exit();
    }
    ?>

