<?php
    $title = "Página Principal";

    require_once ('config/parameters.php');
    require_once INCLUDES."/header.php";
    require_once CONFIG."/connection.php";
    require_once CONFIG."/autenticacao.php";
?>

<body>
    <?php 
        $_SESSION = [];
        $_SESSION['usuariologado'] = false;

        if ($_SESSION['usuariologado']) {
            include_once INCLUDES."/menu.php"; 
        } else {
            include_once 'login.php';
        }    
    ?>        
</body>
