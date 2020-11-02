<?php
// verifica se a sessão já foi criada
if (!isset($_SESSION)) {
    session_start();
}

var_dump($_SESSION);

// função para criar as checkboxes
function MontaCheckbox($nome, $valor, $id) {
    echo '<input type="checkbox" 
                    name="' . $nome . '"     
                    id="' . $id . '" 
                    value="' . $valor . '">
            <label for="' . $id . '"> ' . $valor .  '</label> <br>';
}

// função para criar botões
function MontaButton ($tipo, $valor, $descricao) {
    echo '<button type"' . $tipo . '" value="' . $valor . '"> ' . $descricao . ' </button>';
}
?>