<?php

// Son estructuras que nos permiten repetir un bloque de codigo varias veces. En PHP los bucles mas comunes son en FOR y el WHILE

// WHILE ---> Este bucle se utiliza cuando no se sabe exactamente cuantas vaces se va a repetir el bloque de codigo, por eso, para que el bucle fuciones, debe haber una condicion que tiene que ser verdadera para que continue. 

$contador = 1;

while ($contador <= 5) {
    echo "Contador: $contador <br>";
    $contador++;
}

echo "<br>";

/*
 * Resultado de salida:
 * Contador: 1
 * Contador: 2
 * Contador: 3
 * Contador: 4
 * Contador: 5

 * $contador = 1: Inicializamos una variable $contador con el valor 1.
 * $contador <= 5: Establecemos la condición, el bucle se repetirá mientras $contador sea menor o igual a 5.
 * $contador++: Incrementamos el valor de $contador en cada iteración.
*/

// DO WHILE ---> Este bucle es exactamente igual que el WHILE pero con la diferencia que la condicion se verifica despues de una vez que se haya ejecutado el codigo, por ende, en el DO WHILE el bloque de codigo se ejecutará por lo menos una vez

$contador_2 = 1;

while ($contador_2 <= 5) {
    echo "Contador: $contador_2 <br>";
    $contador_2++;
}

echo "<br>";

/*
 * Resultado de salida:
 * Contador: 1
 * Contador: 2
 * Contador: 3
 * Contador: 4
 * Contador: 5

 * $contador = 1: Inicializamos una variable $contador con el valor 1.
 * El bloque de código dentro de do se ejecuta al menos una vez sin verificar la condición.
 * $contador++: Incrementamos el valor de $contador en cada iteración.
 * $contador <= 5: Después de ejecutar el bloque de código, se verifica la condición. Si es verdadera, se repetirá el bucle; de lo contrario, el bucle se detendrá.
*/

// FOR ---> Este bucle se utiliza para ejecutar un bloque de codigo una cantidad de veces en donde sabemos cuantas veces queremos que se repita dicho bloque

for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}

echo "<br>";

/*
 * Resultado de salida:
 * Numero: 1
 * Numero: 2
 * Numero: 3
 * Numero: 4
 * Numero: 5

 * $i = 1: Inicializamos una variable $i con el valor 1.
 * $i <= 5: Establecemos la condición, el bucle se repetirá mientras $i sea menor o igual a 5.
 * $i++: Incrementamos el valor de $i en cada iteración.
*/

// Tambien podemos utilizar los bucles con otras estructuras como el condicional vemos con un ejemplo 

/*
 * Vamos a tomar de ejemplo el clasico FizzBuzz.
 * Vamos a imprimir los numeros del 1 al 50.
 * Si el numero es multiplo de 3 vamos a imprimi "Fizz"
 * Si el numero es multiplo de 5 vamos a imprimi "Buzz"
 * Si el numero es multiplo de 3 y a su vez de 5 vamos a imprimi "FizzBuzz"
*/

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz <br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz <br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz <br>";
    } else {
        echo "$i <br>";
    }
}

/*
 * En este bucle for, la variable $i se incrementa del 1 al 50. Luego, utilizamos la estructura if-elseif-else para verificar las condiciones:.
 * VSi $i es divisible por 3 y 5, se imprime "FizzBuzz".
 * Si $i es divisible por 3, se imprime "Fizz".
 * Si $i es divisible por 5, se imprime "Buzz".
 * En cualquier otro caso, se imprime el número $i normal.
*/


