<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio2Factorial</title> 
    </head> 
</head> 
<body> 
    <?php 
    define(SIZE, 10); 
    echo "<table border=2>"; 

    $number = 1; 
    for ($row = 1; $row <= SIZE; $row++) { 
        
        echo "<td>", "Factorial de $row", "</td>"; 
         
        echo "<td>", $number, "</td>"; 

        for ($num1 = 1; $num1 < $row ; $num1++) { 

            for ($num2 = 1; $num2 < $num1 ; $num2++) { 
                $number = $number * $num2; 
            }

        }
        echo "</tr>"; 
    } 
    echo "</table>"; 
    ?> 
</body> 
</html>
