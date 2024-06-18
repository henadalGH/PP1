<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    
    <?php
        function multiplicar($radio , $altura)
        {
            $resultado = M_PI * $radio * $radio * $altura;
            return $resultado;

        }
            echo "El volumen del celintro ". multiplicar(3 , 5);
            echo "<br>";
            echo M_PI;
            echo "<br>";
            echo M_PI_2;
    ?>
</body>
</html>