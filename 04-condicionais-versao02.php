<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP - versão02</title>
    <style>
        .aprovado{ color: blue; }
        .reprovado{ color: red; }
        .recuperação{ color: orange; }
    </style>
</head>
<body>
    <h1>Condicionais (versão 02)</h1>
    <hr>

    <?php
    $numero = 5;
    $outroNumero = 1;

    if( $numero > $outroNumero ){ // inicio do if
        ?>
        <p>$numero e maior que $outroNumero!</p>
    <?php
    } // fim do if
    ?>
   
    <h2>Compostas</h2>

    <?php
    $nota1 = 6;
    $nota2 = 6;
    $media = ($nota1 + $nota2) / 2;
    ?>

    <p>Media: <?=$media?></p>

    <?php
    if( $media >= 7){
    ?>

    <p class="aprovado">Aprovado</p>

    <?php
    } else {
    ?>
    
    <p>class=\"reprovado\">Reprovado</P>

    <?php
    }
    ?>

    <h2>Encadeada</h2>
<?php
if( $media >= 7 ){
?>

    <p class="aprovado">Aprovado</p>

<?php
} elseif( ($media >= 6 && $media < 7) ){
?>

    <p class="recuperação">Recuperação</p>;

<?php
} else {
?>
    
    <p class="reprovado">Reprovado</p>

<?php
}
?>

<h2>Swit/case</h2>

<?php
$opcao = 1;
switch ($opcao) {
    case 1: $assunto = "Reclamacães"; break;
    case 2: $assunto = "Elogio"; break;
    case 3: $assunto = "Imformações"; break;
    
    default: $assunto = "Falar com um humano"; break;
}
?>

<p> <?=$assunto?> </p>

</body>
</html>