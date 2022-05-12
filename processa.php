<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1>Processamento de Dados</h1>
    <hr>

<?php
if( empty($_POST["nome"]) || empty($_POST["email"]) ){
    echo "<p>Por favor preencha nome e email!</p>";
?>
    <p style="color: brown;">Por favor preencha nome e email</p>
    <p><a href="08-formulario.html">Voltar</a></p> <!-- opcional -->
<?php
}else {

// Captura os dados enviados a partir do formulario
    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>";  */
    
    // Capturando os dados enviados a partir do formulario
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    // ?? operador de coalescencia nula
    $interesses = $_POST["interesses"] ?? [];
    $informativos = $_POST["informativos"]; 
    $mensagem = $_POST["mensagem"];
?>

    <h2>Dados:</h2>
    <ul>
        <li> Nome: <?=$nome?> </li>
        <li> Email: <?=$email?> </li>
        <li> Idade: <?=$idade?> </li>

        <!-- Aqui usamos o operador de navegação (!) para inverter a logica da função empty -->
        <!--  Se intereses NÃO ESTIVER VAZIO -->
        <?php if( !empty($interesses)){ ?>
            <!-- entao, faca tudo abaixo -->
        <li> Interesses: 
            <ul>
            <?php foreach($interesses as $interesse){?>
            <li> <?=$interesse?></li>
            <?php } ?>
            </ul>
       </li>
       <?php } ?>
        <li> informativos: <?=$informativos?> </li>
        <li> Mensagem: <?=$mensagem?> </li>
    </ul>
<?php } ?>
</body>
</html>