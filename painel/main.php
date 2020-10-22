<?php

//include('../config.php');

if(Painel::logado() == false) {
    header('Location: ' . INCLUDE_PATH_PAINEL);
    die();
} 

if (isset($_GET['logout'])) {
    Painel::logout();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <title>Painel de Controle</title>
</head>
<body>
<div class="menu">

</div> <!-- menu -->
<header>
    <div class="center">
        <div class="logout">
            <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fa fa-window-close"></i></a>
        </div> <!-- logout -->
        <div class="clear"></div>
    </div> <!-- center -->
</header>
<h1>Usuario logado</h1>
<h2>Painel</h2>
<p>Usuário: <?=$_SESSION['user']?></p>
 


</body>
</html>