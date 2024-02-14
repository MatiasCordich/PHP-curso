<?php

// METODOS DE ARREGLOS 

// in_array() - buscar un elemento en un arreglo 
$carrito = ['tablet', 'computadora', 'television'];

var_dump( in_array('tablet', $carrito) );
echo "<br>";

// PHP es case sensiteve, es decir, contempla las mayusculas y minusculas como vemos en el siguiente ejemplo

var_dump( in_array('Tablet', $carrito) ); // Como en el array carrito existe tablet con t mininuscula, si quieremos buscar Tablet con T mayuscula, el resultado sera false. 

// sort() - ordena nuestro arreglo de menor a mayor

$numeros = array(1,5,6,4,3,2);

sort($numeros);

echo "<pre>";
var_dump($numeros);
echo "<pre/>";

// rsort() - ordena de mayor a menor

rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "<pre/>";

// asort() - Ordena los arreglos asociativos (objetos) por valores, es decir, primero ordena por numero y despues ordena los valores por orden alfabetico 

$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente);

echo "<pre>";
var_dump($cliente);
echo "<pre/>";

// ksort() - Ordena los arreglos asociativos (objetos) por las llaves, es decir, las keys de los objetos en orden alfabetico 

ksort($cliente);

echo "<pre>";
var_dump($cliente);
echo "<pre/>";

// krsort() - Ordena los arreglos asociativos (objetos) por las llaves, es decir, las keys de los objetos en orden alfabetico PERO de forma invertida, es decir, de la Z a la A

krsort($cliente);

echo "<pre>";
var_dump($cliente);
echo "<pre/>";