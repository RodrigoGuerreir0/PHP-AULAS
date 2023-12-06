<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Jogo De Dados </h1>

    <?php
    $lado = rand (1,6);
    echo"<img src='imagens/Dado_".$lado. ".jpg'>" ;

    ?>
</body>
</html>