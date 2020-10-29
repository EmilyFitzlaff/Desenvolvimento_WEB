<!DOCTYPE html>
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
                font-size: 18px;
            }

            table {
                border-collapse: collapse;
            }

            table tr td {
                border: 1px solid black;
                padding: 10px;
                width: 70px;
                height: 70px;
                text-align: center;  
                background-color: rgba(0,0,0,.6);
                color: white;              
            }  

            .destaque {
                background-color: purple;
            }          
        </style>      
    </head>

    <body>
        <table>
            <tr>
                <td colspan="4" class="resultado">A</td>
            </tr>

            <tr>
                <td>+</td>
                <td>-</td>
                <td>/</td>
                <td>*</td>
            </tr>

            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>+/-</td>
            </tr>

            <tr>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>C</td>
            </tr>

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td rowspan="2" class="destaque">=</td>
            </tr>
            
            <tr>
                <td>0</td>
                <td>x²</td>
                <td>√x</td>
            </tr>
        </table>
        <?php

        ?>
    </body>
</html>