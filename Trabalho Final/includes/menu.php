<?php
    require_once('../config/connection.php');

    $stmt = $connection->prepare("select * from menu order by menu_ordem, menu_descricao");

    $resultado = $stmt->fetchAll();
?>