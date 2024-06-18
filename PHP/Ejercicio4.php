<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica4</title>
</head>
<body>
    
<?php
  $cadena1="Comer algas";
  $cadena2="Es realmente sano";

  $cadena3=("$cadena1 $cadena2");

 echo substr($cadena3, 6, 5);

 echo "<br>"; //salta de lineas

 echo  strpos($cadena3, "algas");
?>
</body>
</html>