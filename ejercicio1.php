<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>ejercicio1</title> 
    </head> 
</head> 
<body> 
    <?php 
    define(SIZE, 10); 
    echo "<table border=1>"; 

    $number = 1; 
    for ($row = 1; $row <= SIZE; $row++) { 
        echo "<td>", $row, "</td>"; 
        
        echo "<td>", "x", "</td>"; 
         
        echo "<td>", "10", "</td>"; 

        echo "<td>", "=", "</td>"; 
         
        echo "<td>", $number, "</td>"; 
        $number = ($row+1) * 10; 
        
        echo "</tr>"; 
    } 
    echo "</table>"; 
    ?> 
</body> 
</html>