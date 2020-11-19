<?php  

function Conectar() {
    $user = "postgres";
    $password = 123;
    $host = "localhost";
    $port = 5433;
    $dbname = "northwind";

    $connection = new PDO("pgsql:host={$host}; port={$port}; dbname={$dbname}; user={$user}; password={$password}");
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $connection;
}

?>