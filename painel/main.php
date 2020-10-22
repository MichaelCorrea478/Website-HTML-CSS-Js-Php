<?php

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
<div class="menu-wrapper">
    <div class="menu">
        <div class="box-usuario">
            <div class="avatar-usuario">
                <?php if ($_SESSION['img'] == '') {
                    echo "<i class='fa fa-user'></i>";
                } else { 
                    echo "<img src='" . INCLUDE_PATH_PAINEL . "uploads/" . $_SESSION['img'] . "' />";
                } ?>
                
            </div> <!-- avatar-usuario -->
            <div class="nome-usuario">
                <p><?=$_SESSION['nome']?></p>
                <p><?=getCargo($_SESSION['cargo'])?></p>
            </div> <!-- nome-usuario -->
        </div> <!-- box-usuario -->
    </div> <!-- menu -->
</div> <!-- menu-wrapper -->
<header>
    <div class="center">
        <div class="menu-btn">
            <i class="fa fa-bars"></i>
        </div> <!-- menu-btn -->
        <div class="logout">
            <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fa fa-window-close"></i><span>Sair</span></a>
        </div> <!-- logout -->
        <div class="clear"></div>
    </div> <!-- center -->
</header>



<div class="content">

    <div class="box-content left w100">

    </div> <!-- box-content -->

    <div class="box-content left w100">

    </div> <!-- box-content -->

    <div class="box-content left w50">

    </div> <!-- box-content -->

    <div class="box-content right w50">

    </div> <!-- box-content -->

    <div class="clear"></div>

<h1>Usuario logado</h1>
<h2>Painel</h2>
<p>Usuário: <?=$_SESSION['user']?></p>

</div> <!-- content -->

<script src="<?=INCLUDE_PATH?>js/jquery-3.5.1.js"></script>
<script src="<?=INCLUDE_PATH?>js/jquery-ui.js"></script>
<script src="<?=INCLUDE_PATH_PAINEL?>js/main.js"></script>

</body>
</html>