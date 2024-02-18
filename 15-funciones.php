<?php

// En PHP, asi como en cualquier lenguaje, las funciones son bloque de codigo que realizan una tarea en especifico y pueden ser reutilizados en diferentes partes del programa.

// En la programacion los PARAMETROS son variables que se utillizan para recibir valores externos cuando la funcion es llamada de la misma. Gracias a ellos, los datos son pasados a la funcion y la misma puede utilizarlos para su bloque de codigo. 

// Cuando definimos una funcion podemos especificarle la cantidad de parametros que espera recibir, estos mismos actual como variables locales, es decir, solamente existen dentro del bloque de la funcion. 

function sumar($num1, $num2){
    $resultado = $num1 + $num2;

    echo "El resultado de $num1 + $num2 es $resultado <br>";
}

// Para llamar la funcion simplemente la llamamos por su nombre

sumar(1,2);

// En este caso, la función sumar tiene dos parámetros, $num1 y $num2, y la llamada a la función sumar(1, 2) pasa los valores 1 y 2 a esos parámetros respectivamente.

// Asi como ingresamos valores, las funciones tambien pueden devolvernos un resultado, es decir, el valor final una vez que haya terminado toda la ejecucion del bloque de codigo. Veamos en el siguiente ejemplo

function saludo() {
    return "Hola todos <br/>";
}

// Si yo llamo a la funcion por si sola no vamos a poder ver el resultado porque recordemos, la funcion del return es devolver un resultado, no imprimirlo por pantalla para eso debemos guardar el valor que nos devuelve la funcion en una variable e imprimir dicho valor

$saludo = saludo();
echo $saludo;

// Tambien podemos especificar que tipo de dato queremos que nos ingrese a la funcion por parametro y que tipo de dato retorne de la siguiente manera 

function estaAutenticado(bool $autenticado) : string {
    if($autenticado){
        return "Usuario autenticado <br/>";
    } else {
        return "Usuario no autenticado <br/>";
    }
}

// Como vemos le especificamos que el parametro si o si tiene que ser de tipo booleano mientras que a la funcion le especificamos que el tipo de dato a retornar debe ser de tipo string 

$resultado = estaAutenticado(false);

echo $resultado;

// Tambien podemos especificarle a la funcion un retorno opcional, es decir, otro retorno al esperado. 

function haceFrio(bool $respuesta) : ?string {
    if($respuesta){
        return "Hace frio <br/>";
    } else {
        return 26 . "<br/>";
    }
}

// Como vemos en la siguiente funcion, al utilizar el signo de interrogacion "?" lo que estamos diciendo es que la funcion va a devolver un valor de tipo string u otro no especificado. 

$clima = haceFrio(false);

echo $clima;

// En este caso, dependiendo del valor booleano que le pasemos por parametro, la funcion haceFrio() nos puede devolver un string que diga "Hace frio" o un valor de tipo int o cualquier otro. 