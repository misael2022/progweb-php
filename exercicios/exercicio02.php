<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (corrigido)</title>
</head>
<body>
    <h1>Exercício 02 (corrigido)</h1>
    <hr>
<?php
    // ARRAY NUMÉRICO
    $pessoa1 = ["Maria", 30, "maria@gmail.com", "feminino"];
    $pessoa2 = ["Luís", 20, "luiz@hotmail.com", "masculino"];

    // ARRAY ASSOCIATIVO
    $pessoaA = [
        "nome" => "Maria",
        "idade" => 30,
        "email" => "maria@gmail.com",
        "sexo" => "feminino"
    ];

    $pessoaB = [
        "nome" => "Luís",
        "idade" => 20,
        "email" => "luiz@hotmail.com",
        "sexo" => "masculino"
    ];
?>

    <article>
        <h2>Dados</h2>
        <section> <!-- acessando array numérico -->
            <h3><?=$pessoa1[0]?></h3>
            <p> <?=$pessoa1[1]?> </p>
            <p> <?=$pessoa1[2]?> </p>
        </section>

        <section> <!-- acessando array associativo -->
            <h3><?=$pessoaB["nome"]?></h3>
            <p> <?=$pessoaB["idade"]?> </p>
            <p> <?=$pessoaB["email"]?> </p>
        </section>
    </article>

</body>
</html>