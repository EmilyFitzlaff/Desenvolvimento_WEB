<?php
    $title = "Cadastrar Transportadora";

    include_once('class/class_shipper.php');
    include_once('config/functions.php');
?>

<div class="container">
    <?php
        
        $oTransportadora = new Shipper;
        $oTransportadora->CreateForm(); 
        var_dump($_POST['acaoCadastrar']);
        if (// terminar ){ 
            try {
                $oTransportadora->InsertShipper($_POST['descricaoTransportadora'], $_POST['telefoneTransportadora']);
                ?>
                    <div class="alert alert-success" role="alert">
                        Transportadora cadastrada com sucesso!
                    </div>
                <?php
            } catch (PDOException $erro) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <p>Ocorreu um erro inesperado, entre em contato com o suporte.</p> 
                    </div>';
                <?php
                    echo "<em>Erro: {$erro->getMessage()}</em>";           
            }
        }
    ?>
</div>