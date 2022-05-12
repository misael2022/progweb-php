<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 (corrigido)</title>
</head>
<body>
    <h1>Exercício 03 (corrigido)</h1>
    <hr>

<?php
    $salario = 2000; // entrada (qualquer valor)
    
    // Obs.: declarar esta variável inicialmente é algo opcional
    $novoSalario = 0;

    if( $salario < 500 ){
        $novoSalario = $salario * 1.15;  
    } elseif( $salario <= 1000 ){
        $novoSalario = $salario * 1.10;
    } else {
        $novoSalario = $salario * 1.05;
    }
?>
<!-- 
    number_format(
        valor,
        quantidade de casas decimais,
        "separador de casa decimal",
        "separador de milhar"
    ) 
-->
    <p>R$ <?=number_format($salario,2,",",".")?> 
    e R$ <?=number_format($novoSalario, 2, ",", ".")?>
    </p>

</body>
</html>