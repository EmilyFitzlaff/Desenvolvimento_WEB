<?php

    // var_dump($_POST);

    if($_POST['logar']) {
        $stmt = Conectar()->prepare("SELECT * FROM USUARIO WHERE login = {$_POST['codigoUsuario']} AND senha =  '{$_POST['senhaUsuario']}'");

        var_dump($stmt);

        $stmt->execute();

        $resultado = $stmt->fetchAll();

        if ($_POST['codigoUsuario'] == $resultado[0]['login'] && 
            $_POST['senhaUsuario'] == $resultado[0]['senha']) {
            $_SESSION['usuariologado'] = true;
            echo 'entrou no if';
        } else {
            $_SESSION['errousuario'] = true;
            echo 'entrou no else';
        }
    }
?>