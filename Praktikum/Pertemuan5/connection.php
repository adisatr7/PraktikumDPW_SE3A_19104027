<?php
    // Database connection
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_php_crud";

    // Attempt to connect to database
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Error check
    if($conn-> connect_error){

        // Stop the process
        die('Connection error: '. $conn->connect_error);
    }

?>