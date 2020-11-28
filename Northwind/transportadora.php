<?php
    $title = "Consultar Transportadoras";

    include_once('class/class_shipper.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>
<div class="container">
    <h1 class="titulo-principal"><?php echo $title; ?></h1>

    <?php
        $oTransportadora = new Shipper;
        $oTransportadora->CreateTable();
    ?>
</div>