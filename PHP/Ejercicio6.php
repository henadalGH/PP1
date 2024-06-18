<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

    <table border="1">
    <th>*</th>
    <tr>
                <?php
                for ($i = 0; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
    </tr>
    
    <tr>
                
                <?php
                for ($i = 0; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                for ($a = 0; $a <= 10; $a++) {
                    echo "<td>" . ($a * $i) . "</td>";
                }
                echo "</tr>";
            }
            ?>        
        </tr>
        
        
</table>
</body>
</html>