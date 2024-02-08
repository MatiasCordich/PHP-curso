<?php

// En PHP las operaciones de comparcion son de la siguiente manera 

$numero_1 = 20;
$numero_2 = 10;
$numero_3 = 10;
$numero_4 = '20';

// MAYOR
var_dump($numero_1 > $numero_2); 
echo "<br>";

// MENOR
var_dump($numero_1 < $numero_2);
echo "<br>";

// MAYOR IGUAL 
var_dump($numero_1 >= $numero_2);
echo "<br>";

// MENOR IGUAL 
var_dump($numero_1 <= $numero_2);
echo "<br>";

// IGUALDAD DE VALOR
var_dump($numero_1 == $numero_4);
echo "<br>";

// IGUALDAD DE VALOR Y DE TIPO DE DATO
var_dump($numero_1 === $numero_4);
echo "<br>";
