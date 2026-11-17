
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matrices </title>
</head>
<body>
<h2>Matrices </h2>

<?php
$numeros=array();
$valor=100;
for ($f=0;$f<3;$f++) {
    for ($c=0;$c<3;$c++) {
        $numeros[$f][$c]=$valor;
        $valor+=10;
    }
}

    echo "<h2>Contenido de las matrices</h2>";
for ($f=0;$f<3;$f++)
    {for ($c=0;$c<3;$c++)
        {echo$numeros[$f][$c]." ";}
        echo "<br  >";

    }

  
$v=500;
for ($c=0;$c<3;$c++) {
    for ($f=0;$f<3;$f++) {
        $numeros[$f][$c]=$v;
        $v+=20;
    }
}
echo "<br><br>";
for ($c=0;$c<3;$c++)
    {for ($f=0;$f<3;$f++)
        {echo$numeros[$f][$c]." ";}
        echo "<br>";




    }




?>
</body>
</html>