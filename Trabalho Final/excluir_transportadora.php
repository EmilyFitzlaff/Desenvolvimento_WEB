<?php

    $title = "Excluir Transportadora";

    require_once ('config/parameters.php');
    require_once INCLUDES."/header.php";
    require_once INCLUDES."/menu.php";
    require_once CONFIG."/connection.php";
    require_once CLASSE."/class_transportadora.php";
    require_once CONFIG."/functions.php";

?>

<div class="container">
<?php     
    if(isset($_POST['excluir'])) {
        try {
            $stmt = Conectar()->prepare("DELETE FROM shippers WHERE shipper_id = :id");

            $stmt->bindParam(':id', $_GET['registro']);

            if (!$stmt->execute()){
                throw new PDOException();
            }

            echo '<br>
                  <div class="alert alert-success" role="alert">
                    Transportadora excluída com sucesso!
                  </div>';
            exit;
           
        } catch(PDOException $erro) {
            echo '<br><div class="alert alert-danger" role="alert">
                    Esse registro não pode ser excluído pois está vinculado à outro e isso violará a regra de integradade do banco de dados!
                  </div>';
            // echo "<em>Erro: {$erro->getMessage()}</em>";
        }
    }

    if (isset($_GET['registro'])) {
        $stmt = Conectar()->prepare("SELECT * FROM shippers WHERE shipper_id = :id");

        $stmt->bindParam(':id', $_GET['registro']);

        $stmt->execute();
        
        $resultado = $stmt->fetchAll();   
    }
?>
    <h1 class="titulo-principal">Tem certeza que seja excluir o registro abaixo?</h1>
    <form method="POST">
        <div class="form-group">
            <label for="descricaoTransportadora">Nome da Transportadora</label>
            <input type="text" 
                   class="form-control" 
                   id="descricaoTransportadora" 
                   name="descricaoTransportadora"
                   value="<?php echo $resultado[0]['company_name']?>"
                   disabled>
        </div>
        
        <button type="submit" class="btn btn-danger" value="excluir" name="excluir">Excluir</button>
    </form>
</div>