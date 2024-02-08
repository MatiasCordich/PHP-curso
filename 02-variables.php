<!-- VARIABLES -->
<?php

/* Las variables en PHP empiezen con un signo de pesos que es el siguiente $ seguido por el nombre de la variable, quedaria $nombre */

$nombre = "Pepe";

echo $nombre;

/* Tambien podemos crear variables cuyo valor debe ser inmutable, es decir, una constante. Para crear constantes en PHP tenemos que utilizar define() */

define('constante', 'Este es el valor de la constante');

echo constante;

/* Tambien se puede utilizar la palabra const */

const constante_2 = "Este el valor de la constante 2";

echo constante_2;

/* 
Por ultimo, en PHP, podemos utilizar dos formas de nombras las variables, es decir, su forma que son las siguientes

camelCase
snake_case <-- Esta ultima es la mas comun en PHP

Pero aun asi se puede utilizar cualquiera de las dos

*/
