<!DOCTYPE html>
<?php        
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Calculadora</title>  

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                padding: 50px;
                font-family: Arial;
                font-size: 13pt;
            }

            table {
                border-collapse: collapse;
                border-radius: 50px 50px;
            }

            table tr td button {
                border: 1px solid #8d99ae;
                padding: 10px;
                width: 70px;
                height: 70px;
                text-align: center;  
                background-color: #2b2d42;
                color: white;     
                font-weight: bolder;         
            }  

            .destaque {
                background-color: #9a031e;
                border: none;
            }      
            
            .operacoes {
                background-color: #6d6875
            }
        </style>      
    </head>

    <body>
        <form method="GET">
        <table>
            <tr>
                <td colspan="4" class="resultado">A</td>
            </tr>

            <tr>
                <td>
                    <button type="submit" value="soma" class="operacoes">+</button>
                </td>
                <td>
                    <button type="submit" value="subtracao" class="operacoes">-</button>
                </td>
                <td>
                    <button type="submit" value="divisao" class="operacoes">/</buton>
                </td>
                <td>
                    <button type="submit" value="multiplicacao" class="operacoes">*</button>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" value="7">7</button>
                </td>
                <td>
                    <button type="submit" value="8">8</button>
                </td>
                <td>
                    <button type="submit" value="9">9</button>
                </td>
                <td>
                    <button type="submit" value="modulo" class="operacoes">+/-</button>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" value="4">4</button>
                </td>
                <td>
                    <button type="submit" value="5">5</button>
                </td>
                <td>
                    <button type="submit" value="6">6</button>
                </td>
                <td>
                    <button type="submit" value="reset" class="operacoes">C</button>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" value="1">1</button>
                </td>
                <td>
                    <button type="submit" value="2">2</button>
                </td>
                <td>
                    <button type="submit" value="3">3</button>
                </td>
                <td rowspan="2" class="destaque">
                    <button type="submit" value="calcular" class="destaque">=</button>
                </td>
            </tr>
            
            <tr>                
                <td>
                    <button type="submit" value="quadrado" class="operacoes">x²</button>
                </td>
                <td>
                    <button type="submit" value="0">0</button>
                </td>
                <td>
                    <button type="submit" value="raiz" class="operacoes">√x</button>
                </td>
            </tr>
        </table>
        </form>
        <?php

        ?>
    </body>
</html>