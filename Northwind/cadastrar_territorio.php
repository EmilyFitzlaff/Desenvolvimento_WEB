<?php
    $title = "Cadastrar Território";

    include_once('class/class_territory.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>

<div class="container">
    <h1><?php echo $title; ?></h1>
    <?php
        
        $oTerritorio = new Territory;
        $oTerritorio->CreateForm(); 
        
        if (isset($_POST['acaoCadastrar']) && $_POST['acaoCadastrar'] == 'cadastrar'){ 
            try {
                $oTerritorio->InsertTerrority($_POST['descricaoTerritorio'], $_POSTT['regiao']);
                ?>
                    <br>
                    <div class="alert alert-success" role="alert">
                        Território cadastrado com sucesso!
                    </div>
                <?php
            } catch (PDOException $erro) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <p>Ocorreu um erro inesperado, entre em contato com o suporte.</p> 
                    </div>
                <?php
                    echo "<em>Erro: {$erro->getMessage()}</em>";           
            }
        }
    ?>
</div>