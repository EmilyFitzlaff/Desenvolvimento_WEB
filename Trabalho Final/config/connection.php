<?php

    // variáveis do banco
    $user = "postgres";
    $password = 123;
    $host = "localhost";
    $port = 5433;
    $dbname = "HELPDESK";

    $connection = new PDO("pgsql:host={$host}; 
                                 port={$port}; 
                                 dbname={$dbname}; 
                                 user={$user}; 
                                 password={$password}");

    // var_dump($connection);
        

?>