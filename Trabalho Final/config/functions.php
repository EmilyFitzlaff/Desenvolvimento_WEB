<?php

function getMaxID($id_coluna, $nome_tabela) {
    $consulta = Conectar()->query("SELECT MAX($id_coluna) FROM $nome_tabela");

    $max = $consulta->fetch(PDO::FETCH_ASSOC);

    return $max['max'];
}

function ListarTransportadoras() {
    $consulta = Conectar()->prepare("SELECT * FROM shippers");

    $consulta->execute();
    
    // var_dump($consulta);

    $dados = [];

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $dados[] = $linha;
    }

    return $dados;        
}

?>