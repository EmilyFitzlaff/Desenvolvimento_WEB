<?php

    $title = "Excluir Região";

    include_once('class/class_shipper.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>

<div class="container">
<?php     
    if (isset($_GET['registro'])) {
        $stmt = Conexao::Conectar()->prepare("SELECT * FROM shippers WHERE shipper_id = :id");

        $stmt->bindParam(':id', $_GET['registro']);

        $stmt->execute();
        
        $resultado = $stmt->fetchAll();   
    }
?>
    <h1 class="titulo-principal">Tem certeza que seja excluir o registro abaixo?</h1>
    <form method="POST">
        <div class="form-group">
            <label for="nomeTransportadora">Região</label>
            <input type="text"  class="form-control" id="nomeTransportadora" name="nomeTransportadora" value="<?php echo $resultado[0]['company_name']?>" disabled>
        </div>
        
        <button type="submit" class="btn btn-danger" value="excluir" name="excluir">Excluir</button>
    </form>

    <?php 
        $oShipper = new Shipper();
        $oShipper->DeletarShipper($_GET['registro']);
    ?>
</div>