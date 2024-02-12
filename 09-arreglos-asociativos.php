<?php

// Los arreglos asociativos son el equivalente a objetos en Javascript, es decir, accedes a estos objetos por medio de una propiedad. 

$cliente = [
    'nombre' => 'Pepe',
    'saldo' => 300,
    'informacion' => ['tipo' => 'premium']
];

echo "<pre>";
var_dump($cliente);
echo "<pre/>";

// Acceder aun arreglo asociativo (objeto)

echo $cliente['nombre'];
echo "<br>";
echo $cliente['saldo'];
echo "<br>";
echo $cliente['informacion']['tipo'];
echo "<br>";
