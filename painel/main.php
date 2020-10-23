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
        <div class="items-menu">
            <h2>Cadastro</h2>
                <a href="">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviço</a>
                <a href="">Cadastrar Slides</a>
            <h2>Gestão</h2>
                <a href="">Listar Depoimentos</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar Slides</a>
            <h2>Administração do Painel</h2>
                <a href="">Editar Usuário</a>
                <a href="">Adicionar Usuários</a>
            <h2>ConfiguraçãoGeral</h2>
                <a href="">Editar</a>
        </div> <!-- items-menu -->
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

        <h3><i class="fas fa-home"></i>  Painel de Controle</h3>

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <div class="box-metricas-wrapper">
                    <h2>Usuários Online</h2>
                    <p>10</p>
                </div> <!-- box-metricas-wrapper -->
            </div> <!-- box-metricas-single -->
        </div> <!-- box-metricas -->

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <div class="box-metricas-wrapper">
                    <h2>Total de Visitas</h2>
                    <p>100</p>
                </div> <!-- box-metricas-wrapper -->
            </div> <!-- box-metricas-single -->
        </div> <!-- box-metricas -->

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <div class="box-metricas-wrapper">
                    <h2>Visitas Hoje</h2>
                    <p>3</p>
                </div> <!-- box-metricas-wrapper -->
            </div> <!-- box-metricas-single -->
        </div> <!-- box-metricas -->

        <div class="clear"></div>

    </div> <!-- box-content -->

    <div class="box-content left w100">

    </div> <!-- box-content -->

    <div class="box-content left w50">

    </div> <!-- box-content -->

    <div class="box-content right w50">

    </div> <!-- box-content -->

    <div class="clear"></div>

<?php
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>

</div> <!-- content -->

<script src="<?=INCLUDE_PATH?>js/jquery-3.5.1.js"></script>
<script src="<?=INCLUDE_PATH?>js/jquery-ui.js"></script>
<script src="<?=INCLUDE_PATH_PAINEL?>js/main.js"></script>

</body>
</html>