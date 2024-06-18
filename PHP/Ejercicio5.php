<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php

        $var1=0;

        echo "Los 10 de 1 al 10 con while ";
        echo "<br>";
        echo "<br>";
        while($var1 <= 10)
        {
           echo $var1. " ";

           $var1++;
        }

        echo "<br>";
        echo "<br>";
        echo "los 10 numeros del 1 al 10 con el siclo for ";

        

        echo "<br>";
        echo "<br>";

        for($var1=0; $var1<=10; $var1++)
        {
            echo $var1. " ";
        }

    ?>
</body>
</html>