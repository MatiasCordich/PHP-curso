<?php

// Los condicionales se utilizan para tomar decisiones en el flujo de un programa basándose en ciertas condiciones. Los condicionales más comunes son if, else, elseif y switch.

$autenticado = true;
$admin = false;

if ($autenticado) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, inicia sesion';
}

echo "<br>";

// En los condicionales se pueden utilizar ciertos operadores con el proposito de comparar valores y, a partir de dicha comparacio, obtener un resultado booleano. Dichos operadores son 

// Igualdad (==) compara si dos valors son iguales

$a = 5;
$b = "5";

if ($a == $b) {
    echo "Los valores son iguales.";
} else {
    echo "Los valores no son iguales.";
}
// Salida: Los valores son iguales.

echo "<br>";

// Identidad (===) es igual que el de igualdad pero se le suma que compara si ambos valores son del mismo tipo de dato

if ($a === $b) {
    echo "Los valores son iguales y del mismo tipo.";
} else {
    echo "Los valores no son iguales o no son del mismo tipo.";
}
// Salida: Los valores no son iguales o no son del mismo tipo.

echo "<br>";

// Desigualdad (!=) Compara si dos valores son diferentes

$a = 10;
$b = 5;

if ($a != $b) {
    echo "Los valores no son iguales.";
} else {
    echo "Los valores son iguales.";
}
// Salida: Los valores no son iguales.

echo "<br>";

// No identidad (!==) es igual al de Desigualdad pero se le suma si ambos valores no son del mismo tipo

$a = 10;
$b = "10";

if ($a !== $b) {
    echo "Los valores no son iguales o no son del mismo tipo.";
} else {
    echo "Los valores son iguales y del mismo tipo.";
}
// Salida: Los valores son iguales o no son del mismo tipo.

echo "<br>";

// Comparacion (<, >, <=, >=) compara valores numericos ya sean MAYOR, MENOR, MAYOR IGUAL QUE y MENOR IGUAL QUE

$x = 7;
$y = 10;

if ($x < $y) {
    echo "$x es menor que $y.";
} else {
    echo "$x no es menor que $y.";
}
// Salida: 7 es menor que 10.

echo "<br>";

// Tambien, existen ciertos operadores logicos con el proposito de realizar dos o mas condiciones y asi obtener un valor. Dichos operadores son

// AND (&&) evalua si dos o mas condiciones tienen que ser SI O SI verdaderas

$temperatura = 25;
$humedad = 60;

if ($temperatura > 20 && $humedad < 70) {
    echo "Condiciones óptimas.";
} else {
    echo "Condiciones no óptimas.";
}
// Salida: Condiciones óptimas.

echo "<br>";

// OR (||) evalua con que si al menos una de las  dos o mas condiciones son verdaderas 

$esEstudiante = false;
$tieneDescuento = true;

if ($esEstudiante || $tieneDescuento) {
    echo "Califica para un descuento.";
} else {
    echo "No califica para un descuento.";
}
// Salida: Califica para un descuento.

echo "<br>";

// ELSEIF Esta estructura permite agregar multiples condiciones cuyo haya mas de dos casos posibles

$hora = 14;

if ($hora < 12) {
    echo "Buenos días.";
} elseif ($hora < 18) {
    echo "Buenas tardes.";
} else {
    echo "Buenas noches.";
}
// Salida: Buenas tardes.

echo "<br>";

// SWITCH Esta estructura es util cuando se desea comparar una variables que puede tener multiples valores diferentes volviendla una alternativa mas limpia y legible. 

$diaSemana = "Miércoles";

switch ($diaSemana) {
    case "Lunes":
        echo "Primer día de la semana";
        break;
    case "Miércoles":
        echo "Mitad de la semana";
        break;
    case "Viernes":
        echo "¡Viernes, por fin!";
        break;
    default:
        echo "Día no especificado";
}
// Salida: Mitad de la semana.

echo "<br>";