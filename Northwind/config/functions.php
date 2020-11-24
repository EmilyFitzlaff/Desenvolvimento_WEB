<?php
    /**
     * Neste arquivo estão as funções que serão utilizadas em diversas classes do sistema.
     */
    
    /**
     * @return INT retorna o código do último elemento cadastrado no BD
     */
    function getMaxID($id_coluna, $nome_tabela) {
        $consulta = Conexao::Conectar()->query("SELECT MAX($id_coluna) FROM $nome_tabela");

        $max = $consulta->fetch(PDO::FETCH_ASSOC);

        return $max['max'];
    }

    function mensagemIntegridadeBD() {
        return "Este registro não pode ser excluído pois está vinculado à outro e isso violará uma regra de integradade do banco de dados!";
    }
?>