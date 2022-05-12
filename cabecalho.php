<?php

$pagina = basename($_SERVER['PHP_SELF']);

switch($pagina){
    case 'index.php': $titulo = "pagina Inicial"; break;
    case 'produtos.php': $titulo = "produtos"; break;
    case 'servicos.php': $titulo = "servicos"; break;
    default: $titulo = "Contato"; break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> - Site ABC</title>

    <link rel="stylesheet" href="">
</head>
<body>
    
</body>
</html>