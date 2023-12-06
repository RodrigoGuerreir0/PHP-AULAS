<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$lancamentos = 49;
$contagem_faces = array(0,0);

for ($i = 0; $i <= $lancamentos; $i++) {
    $lado = rand(1,2);
    echo "<img src=imagens/moeda_" . $lado . ".jpg' width=250px height=250px> ";

    $contagem_faces[$lado - 1] = $contagem_faces[$lado - 1] + 1 ;                 
}
    echo "<h2>Sumário dos Lançamentos</h2>";
    for ($i = 0; $i < 2; $i++) {
        echo "Face " . ($i + 1) . ": " . $contagem_faces[$i] . " vezes<br>";
    }

    $porcentagem_cara = $contagem_faces[0] / ($lancamentos +1);
    $porcentagem_coroa = $contagem_faces[1] / ($lancamentos +1);
    echo "A porcentagem de cara é : " . $porcentagem_cara ."<br>";
    echo "A porcentagem de coroa é : " . $porcentagem_coroa ."<br>";
  ?>
  
  

</body>
</html>