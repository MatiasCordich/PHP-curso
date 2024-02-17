<?php

// El foreach es una una funcion iteradora que sirve para poder recorrer elementos de un array, ya sean en arrays indexados o arrays asociativos. 

// El foreach toma cada elemento de un array y le asigna una variable temporal para que se pueda trabajar con ESE elemento en particular dentro del codigo del bucle durante al iteracion

$clientes = ['Pepe', 'Maria', 'Esculapio'];

foreach ($clientes as $cliente) {
    echo $cliente . '<br/>';
}

// Toma el array de "clientes" y por cada iteracion toma el elemento del array y se lo asigna a la variable "cliente" y con esa variable trabaja con el bloque de codigo a realizar, en este caso, imprimir por pantalla el elemento de esa iteracion. 

echo '<br/>';

// Tambien el foreach sirve para los arreglos asociativos 

$cliente = [
    'nombre' => 'Pepe',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $valor) {
    echo $valor . '<br/>';
}

echo '<br/>';

// Toma el array asociativo de "cliente" e imprime los valores de las propiedades de "cliente", OJO NO ITERA SOBRE LAS KEYS pero se puede de la siguente manera. 

foreach ($cliente as $key => $valor) {
    echo "$: $valor.<br>";
}

// Como vemos al poner "key" estamos especificando que quermeos imprimir tambien la key del array asociativo y despues su valor

// Uso del foreach en un caso mas real 

$productos = [
    [
        'nombre' => 'Mouse',
        'precio' => 30,
        'disponible' => true
    ],
    [
        'nombre' => 'Teclado',
        'precio' => 80,
        'disponible' => false
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 130,
        'disponible' => false
    ],
    [
        'nombre' => 'Auriculares',
        'precio' => 120,
        'disponible' => true
    ],
];

// Supongamos que tenemos el siguiente array de objetos (array asociativos) y queremos hacer una iteracion de cada producto. Vamos a hacer lo siguiente

foreach ($productos as $producto) {

    // Al utilizar esto evitamos que el servidor se encargue de generar HTML cuando se puede encargar el navegador.
?>
    <p>
        Producto: <?php
                    echo $producto['nombre']
                    ?>
    </p>
    <p>
        Precio: <?php
                echo "$ " . $producto['precio']
                ?>
    </p>
    <p>
        <?php echo ($producto['disponible']) ? 'Disponible' : 'No disponbile' ?>
    </p>


<?php
}
