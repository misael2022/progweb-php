<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (Corrigido)</title>
</head>
<body>
    <h1>Exercício 01 (Corrigido)</h1>
    <hr>
<?php
    //$data = "26/04/2022";
    $data = date("d/m/Y");
    const NOME = "Fulano";
    $idade = 25;
    //$idade = date("Y") - 1990;
    const CIDADE = "Rio de Janeiro";
?>
<!-- Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em São Paulo -->
<p>Hoje é <?=$data?>. <?=NOME?> tem <?=$idade?> anos 
 e nasceu no <?=CIDADE?> </p>

</body>
</html>