<?php 
    $title = "Transportadora";

    require_once ('config/parameters.php');
    require_once INCLUDES."/header.php";
    require_once INCLUDES."/menu.php";
    require_once CONFIG."/connection.php";
    require_once CLASSE."/class_transportadora.php";
    require_once CONFIG."/functions.php";
?>
<div class="container">
    <h1 class="titulo-principal">Consultar Transportadoras</h1>
    <?php $resultado = ListarTransportadoras(); ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Descrição</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($resultado as $linha) {
            ?>
            <tr>
                <th scope="row"><?php echo $linha['shipper_id'] ?></th>
                <td><?php echo $linha['company_name'] ?></td>
                <td><?php echo $linha['phone'] ?></td>
                <td>Alterar | Excluir</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>