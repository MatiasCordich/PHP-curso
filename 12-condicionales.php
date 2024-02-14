<?php

// Los condicionales se utilizan para tomar decisiones en el flujo de un programa basándose en ciertas condiciones. Los condicionales más comunes son if, else, elseif y switch.

$autenticado = true;
$admin = false;

if ($autenticado) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, inicia sesion';
}