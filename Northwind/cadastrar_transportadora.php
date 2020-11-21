<?php
    $title = "Cadastrar Transportadora";

    include_once('class/class_shipper.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>

<div class="container">
    <h1>Cadastrar Transportadora</h1>
    <?php
        
        $oTransportadora = new Shipper;
        $oTransportadora->CreateForm(); 
        
        if (isset($_POST['acaoCadastrar']) && $_POST['acaoCadastrar'] == 'cadastrar'){ 
            try {
                $oTransportadora->InsertShipper($_POST['descricaoTransportadora'], $_POST['telefoneTransportadora']);
                ?>
                    <br>
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