<?php

//Mostrar la tabla de multiplicar del 3, utilizando un while (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//3 * 1 = 3
//3 * 2 = 6
//3 * 3 = 9

$i=1;

while ($i <= 20) {
    $resultado=3*$i; 
    echo ' 3*'. $i. '= '. $resultado. '<hr>' ;
    $i++;
}