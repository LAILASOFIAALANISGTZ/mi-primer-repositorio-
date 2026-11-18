```php
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de numeros</title>
</head>

<body>

<h2>REGISTRO DE TRES NUMEROS</h2>

<!-- Formulario de captura -->
<form method="POST" action="">

<?php

// Ciclo para mostrar tres renglones de captura
for ($i = 0; $i < 3; $i++) {

    echo "Numero 1: ";
    echo "<input type='number' name='Numero1[]'> ";

    echo "Numero 2: ";
    echo "<input type='number' name='Numero2[]'> ";

    echo "<br><br>";
}

?>

<!-- Boton para guardar y calcular -->
<button type="submit" name="guardar" value="guardar">
    Guardar y calcular
</button>

</form>

<?php

// Verificar si se presiono el boton Guardar
if (isset($_POST['guardar'])) {

    // Guardar los datos en dos arreglos
    $n1 = $_POST['Numero1'];
    $n2 = $_POST['Numero2'];

    $validar = true;

    // Validar los tres pares de numeros
    for ($i = 0; $i < 3; $i++) {

        // Numero 1 debe estar entre 51 y 99
        if ($n1[$i] < 51 || $n1[$i] > 99) {
            $validar = false;
        }

        // Numero 2 debe estar entre -50 y -1
        if ($n2[$i] < -50 || $n2[$i] > -1) {
            $validar = false;
        }
    }

    // Si los numeros son correctos
    if ($validar == true) {

        // Declarar los arreglos de resultados
        $sum = array();
        $res = array();
        $mul = array();
        $div = array();

        // Ciclo para realizar los calculos
        for ($i = 0; $i < 3; $i++) {

            // Calcular suma
            $sum[$i] = $n2[$i] + $n1[$i];

            // Calcular resta
            $res[$i] = $n2[$i] - $n1[$i];

            // Calcular multiplicacion
            $mul[$i] = $n2[$i] * $n1[$i];

            // Calcular division
            $div[$i] = $n2[$i] / $n1[$i];
        }

        // Imprimir el arreglo de suma
        echo "<h3>ARREGLO DE SUMA</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $sum[$i] . "<br>";
        }

        // Imprimir el arreglo de resta
        echo "<h3>ARREGLO DE RESTA</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $res[$i] . "<br>";
        }

        // Imprimir el arreglo de multiplicacion
        echo "<h3>ARREGLO DE MULTIPLICACION</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $mul[$i] . "<br>";
        }

        // Imprimir el arreglo de division
        echo "<h3>ARREGLO DE DIVISION</h3>";

        for ($i = 0; $i < 3; $i++) {
            echo $div[$i] . "<br>";
        }

    } else {

        // Mensaje de error
        echo "Numero incorrecto, revisa los rangos.<br>";
        echo "Numero 1 debe ser del 51 al 99.<br>";
        echo "Numero 2 debe ser del -50 al -1.<br>";
    }
}

?>

</body>
</html>
```