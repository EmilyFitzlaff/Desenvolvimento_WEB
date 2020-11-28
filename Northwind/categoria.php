<?php
    $title = "Consultar Categorias";

    include_once('class/class_categoria.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>
<div class="container">
    <h1 class="titulo-principal"><?php echo $title; ?></h1>

    <?php
        $oCategoria = new Categoria;
        $oCategoria->CreateTable();
    ?>
</div>