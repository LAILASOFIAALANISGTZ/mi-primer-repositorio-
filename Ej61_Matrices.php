
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
        $n[$f][$c]=$v;
        $v+=20;
    }
}
echo "<br><br>";
for ($c=0;$c<3;$c++)
    {for ($f=0;$f<3;$f++)
        {echo$n[$f][$c]." ";}
        echo "<br>";}

        echo "<br><br>";



    $n1=array();
$v1=$valor+$v;
for ($f=0;$f<3;$f++) {
    for ($c=0;$c<3;$c++) {
        $n1[$f][$c]=$numeros[$f][$c]+$n[$f][$c];
        $valor+=0;
    }
}

for ($f=0;$f<3;$f++)
    {for ($c=0;$c<3;$c++)
        {echo$n1[$f][$c]." ";}
        echo "<br  >";

    }




?>
</body>
</html>