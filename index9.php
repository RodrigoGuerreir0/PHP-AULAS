<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "medida";
    function calculadoramedia($notas)
    {
        $total = array_sum($notas);
        $quantidade = count($notas);
        $media=$total / $quantidade;
        return $media;
    }
    $notas0=array("8","9","7","9","5","10","10", 
    $notas0=calculadoramedia($notas0));
    echo"A media é".$notas0;
    ?>

</body> 

</html>F