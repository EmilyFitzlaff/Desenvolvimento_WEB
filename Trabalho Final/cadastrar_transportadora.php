<?php 
    $title = "Cadastrar Transportadora";

    require_once ('config/parameters.php');
    require_once INCLUDES."/header.php";
    require_once INCLUDES."/menu.php";
    require_once CONFIG."/connection.php";
    require_once CLASSE."/class_transportadora.php";
    require_once CONFIG."/functions.php";

    ListarTransportadoras()
?>
<div class="container">
    <h1 class="titulo-principal">Cadastrar Transportadoras</h1>
    <form method="POST">
        <div class="form-group">
            <label for="descricaoTransportadora">Nome da Transportadora</label>
            <input type="text" 
                   class="form-control" 
                   id="descricaoTransportadora" 
                   placeholder="Informe o nome da transportadora" name="descricaoTransportadora"
                   required>
        </div>
        <div class="form-group">
            <label for="telefoneTransportadora">Telefone para Contato</label>
            <input type="phone" class="form-control" id="telefoneTransportadora" placeholder="Informe um telefone para contato" name="telefoneTransportadora" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <?php
        if(isset($_POST['descricaoTransportadora']) && isset($_POST['telefoneTransportadora'])) {
            $transportadora = new Transportadora;
            $transportadora->CadastrarTransportadora($_POST['descricaoTransportadora'], $_POST['telefoneTransportadora']);

            echo '<div class="alert alert-success" role="alert">
                    Transportadora cadastrada com sucesso!
                </div>';
        }
    ?>
</div>

