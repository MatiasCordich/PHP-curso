<?php

// emtpy() esta funcion revisa si un arrelgo esta vacio

$numeros = [];
$letras = ['a', 'b', 'c'];
$perro = [
    'nombre' => 'chicho',
    'edad' => 2
];

var_dump(empty($numeros));
echo "<br>";
var_dump(empty($letras));
echo "<br>";

// isset() Revisa si un arreglo esta creado o una propiedad esta definida

var_dump(isset($letras2));
echo "<br>"; 
// Da false porque el arreglo letras2 no fue creado 

var_dump(isset($perro['nombre']));
echo "<br>";
// Da true porque el objeto perro tiene una propiedad llamada 'nombre'

var_dump(isset($perro['color']));
echo "<br>";
// Da false porque el objeto perro NO tiene una propiedad llamada 'color'