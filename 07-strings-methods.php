<?php

// Existen alguans funciones para los strings, algunas de las mas importantes son

$nombre = "Pepe";

// STRLEN() --> Me indica la cantidad de caracteres que tiene el string (esto incluye los espacios)

echo strlen($nombre);

echo "<br>";

// VAR_DUMP() --> Me indica la cantidad de caracteres que tiene el string (esto incluye los espacios) y tambien el tipo de dato que es la variable aunque sea redundante

echo var_dump($nombre);

echo "<br>";

// TRIM() --> Elimina los espacios innecesarios de un string

$texto = "Hola            a         todos";

echo trim($texto);

echo "<br>";

// STRTOUPPER() --> Transformo todo los caracteres del string en mayusculas

echo strtoupper($nombre);

echo "<br>";

// STRTOLOWER() --> Transformo todo los caracteres del string en en minusculas

$nombre_2 = "JORGE"; 

echo strtolower($nombre_2);

echo "<br>";

// STR_REPLACE() --> Reemplaza un valor del strig, para eso esta funcion lleva 3 parametros str_replace('string_que_se_reemplaza', 'string_a_reeplazar', $variable)

$nombre_3 = "Maria Jose"; 

echo str_replace('Maria','M', $nombre_3);

echo "<br>";

// STRPOS() --> Verifica si existe algun valor o caracter en el string, para eso esta funcion lleva 3 parametros strpos($variable, 'valor_string'). Como resultado nos indica en la posicion que se encuentra el string

echo strpos($nombre, 'Pepe');

echo "<br>";

// CONCATENACION 

// Existen dos formas de concatenar un string

// Usando el punto
echo 'El Cliente se llama ' . $nombre;

echo "<br>";

// Usando llaves y con comillas dobles
echo "El Cliente se llama {$nombre}";

echo "<br>";
