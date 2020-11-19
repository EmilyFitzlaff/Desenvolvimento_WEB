<?php

var_dump($_POST);

$stmt = Conectar()->prepare("SELECT * FROM USUARIO WHERE login = :codigo AND senha = :senha");

$stmt->bindParam(':codigo', $_POST['codigoUsuario']);
$stmt->bindParam(':senha', $_POST['senhaUsuario']);
$stmt->execute();

$resultado = $stmt->fetchAll();

var_dump($resultado);

?>