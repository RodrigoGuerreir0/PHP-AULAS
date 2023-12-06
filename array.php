<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Teste de Array</h1>

    <?php
    // Definindo um array de nomes
    $nomes = array("João", "Maria", "Pedro", "Ana");
    
    // Exibindo os nomes em uma lista HTML
    echo "<h2>Lista de Nomes</h2>";
    echo "<ul>";
    
    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    
    echo "</ul>";
    
    // Exercício 1: Adicionando Novos Nomes
    echo "<h2>Lista Atualizada Após Adicionar Novos Nomes</h2>";
    
    // Adicionando novos nomes ao array
    $novosNomes = array("Carlos", "Fernanda", "Ricardo");
    $nomes = array_merge($nomes, $novosNomes);
    
    // Exibindo a lista atualizada em HTML
    echo "<ul>";
    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    echo "</ul>";

    echo "----------------------------------------";
    ?>

    
    <h1>Exercicio 2</h1>

    <?php
    $nomes = array("João", "Maria", "Pedro", "Ana");

    unset($nomes[0]);


    echo "<h2>Lista de Nomes</h2>";
    echo "<ul>";

    foreach ($nomes as $nome){
        echo "<li>$nome</li>";
    }
    echo "</ul>";

    echo "----------------------------------------";
    ?>
   

</body>
</html>