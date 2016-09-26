<?php

$n1 = "5";
$n2 = 5;

$comparacion1 = $n1 == $n2; //true
$comparacion2 = $n1 === $n2;//false

echo $comparacion1 . '<hr>';
echo $comparacion2 . '<hr>';

$saludo1 = 'Hola ';
$saludo2 = 'Mundo ';

echo $saludo1 . $saludo2;//Con el . se concatenan las variables
echo '<br>';
echo "Acabo de saludar a $saludo2";
echo '<br>';
echo 'Acabo de saludar a $saludo2';
echo '<br>';
echo 'Acabo de saludar a '. $saludo2;//Diferencias entre comillas dobles y simples

echo '<hr>';//-------------------------------------------------------------------

/* 
 * Ejemplo 1 
 * Uso de variables. 
 * Mostrar información con echo y print. 
 * Esto es un comentario multilinea 
 */ //Este de una sóla línea 
#Este también pero es menos usado  $variable = 5 ; 
echo 'Nuestra variable vale: ' . $variable . '<br>'; //Con puntos
 print 'Nuestra variable vale: ' . $variable . '<br>';//Con puntos 
 echo 'Nuestra variable vale: ' , $variable , '<br><hr>'; //Con comas  $anInteger = 3; 
$aFloat = 3.1416; 
$aString = "Hola "; 
$anotherString = 'mundo'; 
$aBoolean = true; // recomendación Zend, en minúsculas. 
$anotherBoolean = false; 
print($aString . $anotherString . '<hr>'); 

 //podemos usar texto con comillas simples y dobles. 
//más habitual las simples y dejamos las dobles para el html 
//sin embargo las dobles permiten embeber variables en cadenas de texto: 
echo "Un numero entero es $anInteger <br>"; 
echo 'Un numero entero es $anInteger <br>'; 
 /* 
 * Nosotros usaremos el standar de codificación de Zend. 
 * Iremos viendo sus recomendaciones: 
 * Variables con estilo "$camelCase". 
 * Las concatenaciones con espacios a ambos lados del punto 
 */  
echo 'Una variable booleana es ' . $aBoolean . ' y otra es ' . $anotherBoolean; 
 // ojo!! echo no muestra los "false".


?>