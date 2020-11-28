<?php
    $title = "Consultar Regiões";

    include_once('class/class_region.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>
<div class="container">
    <h1 class="titulo-principal"><?php echo $title; ?></h1>

    <?php
        $oRegiao = new Region;
        $oRegiao->CreateTable();
    ?>
</div>