<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "buscheck";

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connection_error){
        die("Falha na conexão" . $conn->connect_error);
    }
?>