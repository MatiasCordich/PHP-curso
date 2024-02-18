<?php

// En PHP json_encode y json_decode son funciones que se utilizan para trabajar con datos en formato JSON.

// json_encode()
// Supongamos que tienes un array asociativo en PHP y deseas convertirlo a formato JSON.

$datos = array(
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Ejemplo"
);

$jsonDatos = json_encode($datos);

echo $jsonDatos;

// json_decode 
//Ahora, supongamos que tienes una cadena JSON y deseas convertirla de nuevo a datos de PHP.

$jsonDatos_2 = '{"nombre":"Juan","edad":25,"ciudad":"Ejemplo"}';

$arrayDatos = json_decode($jsonDatos, true);
//El segundo parámetro true indica que deseas que el resultado sea un array asociativo en lugar de un objeto

echo "<pre>";
var_dump($arrayDatos);
echo "<pre/>";

