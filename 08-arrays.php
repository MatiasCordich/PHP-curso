<?php

/**
 * En PHP, los arreglos, Arrays, tienen dos formas.
 * Los Arrays TRADICIONALES, es decir, los que sus elementos se guardan de manera indexada
 * Los Arrays ASOCIATIVOS, en PHP, no existe tal cosa como los objetos, sino que su equivalente son los estos arreglos asociativos. 
*/

// CREACION DE ARREGLOS INDEXADOS

$carrito = ['tablet', 'television', 'computadora'];

echo "<pre>";
var_dump($carrito);
echo "<pre/>";

// ACCEDER A UN ELEMETNO POR SU INDICE

echo $carrito[0];


// AGREGAR UN ELEMENTO 

$carrito[3] = 'microndas';

echo "<pre>";
var_dump($carrito);
echo "<pre/>";

// Esta forma tiene su desventaja ya que tenes que saber la extension del arreglo, por eso existe una funcion que te agrega un elemento en la ultima posicion.

// ARRAY_PUSH() --> Agrega un elemento en la ultima posicion del arreglo
array_push($carrito, 'audifonos');

echo "<pre>";
var_dump($carrito);
echo "<pre/>";

// ARRAY_UNSHIFT() --> Agrega un elemento en la primera posicion del arreglo.  

array_unshift($carrito, 'smartwatch');

echo "<pre>";
var_dump($carrito);
echo "<pre/>";