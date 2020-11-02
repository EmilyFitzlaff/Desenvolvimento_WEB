<!DOCTYPE html>
<?php include_once('processar.php'); ?>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Calculadora</title>  
        <style>            
        </style>      
    </head>

    <body>
        <form method="GET">
            <?php 
                /*
                MontaCheckbox(1, 1, 1);
                MontaCheckbox(2, 2, 2);
                MontaCheckbox(3, 3, 3);
                MontaCheckbox(4, 4, 4);
                MontaCheckbox(5, 5, 5);
                MontaCheckbox(6, 6, 6);
                MontaCheckbox(7, 7, 7);
                MontaCheckbox(8, 8, 8);
                MontaCheckbox(9, 9, 9);
                MontaCheckbox(0, 0, 0);
                */

                MontaButton("submit", 1, 1);
            ?>

            <button type="submit" value="somar">+</button>
            <button type="submit" value="subtracao">-</button>
            <button type="submit" value="divisao">/</button>
            <button type="submit" value="multiplicacao">*</button>
            <button type="submit" value="igual">=</button>
            <button type="reset"  value="reiniciar">C</button>

            <?php 
                $_SESSION['valor'] = $_REQUEST['1'];
                echo $_SESSION['valor'];
            ?>
        </form>
    </body>
</html>