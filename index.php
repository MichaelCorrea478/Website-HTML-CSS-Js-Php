<?php
    include('./config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="descrição do meu website">
    <meta name="keywords" content="palavras chave">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <title>Projeto 01</title>
</head>
<body>

<?php

    $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';

    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
        break;
        case 'servicos':
            echo '<target target="servicos" />';
        break;
    }

?>

<header>
    <div class="center">
        <div class="logo left">
            <a href="/">Logomarca</a>
        </div> <!-- logo -->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fas fa-bars"></i>
            </div> <!-- botao-menu-mobile -->
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div> <!-- center -->
</header>

<?php


    if (file_exists('./pages/' . $url . '.php')) {
        include('./pages/' . $url . '.php');
    } else {
        include('./pages/home.php');
    }


?>

<footer>
    <div class="center">
        <p>Todos os direitos reservados.</p>
    </div> <!-- center -->
</footer>
    
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/jquery-ui.js"></script>
<script src="./js/script.js"></script>

<?php
    if ($url == 'contato') { ?>

        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>

<?php } ?>

<?php
    if ($url == 'home') { ?>

        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

<?php } ?>

</body>
</html>