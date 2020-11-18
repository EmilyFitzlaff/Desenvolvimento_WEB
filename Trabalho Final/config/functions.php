<?php

function getMaxID($id_coluna, $nome_tabela) {
    $consulta = Conectar()->query("SELECT MAX($id_coluna) FROM $nome_tabela");

    $max = $consulta->fetch(PDO::FETCH_ASSOC);

    return $max['max'];
}

?>