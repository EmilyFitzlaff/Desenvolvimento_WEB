<?php
    $title = "Região";

    include_once('class/class_region.php');
    include_once('config/functions.php');
    include_once('layout/header.php');
    include_once('layout/menu.php');
?>
<div class="container">
    <h1 class="titulo-principal">Consultar Regiões</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <span class="btn btn-outline-success margin-bottom"> 
        <a href="cadastrar_regiao.php" class="green white">Cadastrar Região</a>
    </span>

    <?php
        $oRegiao = new Region;
        $oRegiao->CreateTable();
    ?>
</div>