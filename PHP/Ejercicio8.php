<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
    
<?php
        function mayor($num1 , $num2)
        {
            if( $num1 > $num2)
            {
                 echo "El mayor es: $num1 ";
            }else{

                echo "El mayor es: $num2 ";
            }
        }
            echo mayor(15 , 10);
?>
</body>
</html>