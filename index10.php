<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dia e noite</h1>

    <?php
    date_default_timezone_set("America /Sao_paulo");
    $hoje = date("d/m/y");
    $agora = date("h,i");
    $hora = date("h");

    
    if ($hora < 6 || $hora > 18) {
        echo "<img src='imagens/lua.jpg'>";
    } else {
        echo "<img src='imagens/sol.jpg'>";
    }


    echo "<br>";

    echo "Hoje é dia " . $hoje . " e agora são " . $agora . "horas.";

    echo "<br>";
    echo "erpykr´k´k´kgs";
    echo $hora;
    echo "<br>";

    if ($hora >6 && $hora < 12) {
        echo "Bom dia";
    } else if ($hora >= 12 && $hora < 18) {
        echo "Boa tarde";
    } else {
        echo "Boa noite";
    }
    ?>
</body>

</html>