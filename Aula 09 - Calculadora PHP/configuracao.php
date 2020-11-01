<?php      

    session_start();

    $vetor = $_SESSION['valor'];

    echo $_SESSION[$vetor];

?>