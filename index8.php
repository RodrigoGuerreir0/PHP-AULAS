<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calculadoraArea($l, $a)
    {
        $total1 = $l *  $a;
        return $total1;
    }
    $area = calculadoraArea(4, 5);
    echo "O resultado da area " . $area;

    echo "<br>"; 
    function calculadoraPerimetro($l, $a)
    {
        $total2 =  2 * $l + 2 * $a;
        return $total2;
    }
    $perimetro = calculadoraPerimetro(4, 5);
    echo "O resultado do perimetro " . $perimetro;


    ?>

</body>

</html>