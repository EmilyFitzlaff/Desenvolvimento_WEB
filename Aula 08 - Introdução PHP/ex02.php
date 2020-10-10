<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício 02</title>
    </head>
    <body>
        <?php
            for ($i = 1; $i <= 4; $i ++) {
                for ($j = 1; $j <= 10; $j ++) {
                    $m[$i][$j] = rand(1,100);
                    echo $m[$i][$j] . "  ";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>