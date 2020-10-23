<?php

$usuariosOnline = Painel::listarUsuariosOnline();
$totalVisitas = Painel::getTotalVisitas();
$visitasHoje = Painel::getVisitasHoje();

?>

<div class="box-content left w100">

        <h3><i class="fas fa-home"></i>  Painel de Controle</h3>

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <div class="box-metricas-wrapper">
                    <h2>Usuários Online</h2>
                    <p><?php echo count($usuariosOnline); ?></p>
                </div> <!-- box-metricas-wrapper -->
            </div> <!-- box-metricas-single -->
        </div> <!-- box-metricas -->

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <div class="box-metricas-wrapper">
                    <h2>Total de Visitas</h2>
                    <p><?=$totalVisitas?></p>
                </div> <!-- box-metricas-wrapper -->
            </div> <!-- box-metricas-single -->
        </div> <!-- box-metricas -->

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <div class="box-metricas-wrapper">
                    <h2>Visitas Hoje</h2>
                    <p><?=$visitasHoje?></p>
                </div> <!-- box-metricas-wrapper -->
            </div> <!-- box-metricas-single -->
        </div> <!-- box-metricas -->

        <div class="clear"></div>

</div> <!-- box-content -->

<div class="box-content left w100">

    <h3><i class="fas fa-globe"></i>  Usuários Online</h3>

    <div class="table-responsive">
        <div class="row">
            <div class="col"><span>IP</span></div> <!-- col -->
            <div class="col"><span>Última Ação</span></div> <!-- col -->
            <div class="clear"></div>
        </div> <!-- row -->

        <?php foreach ($usuariosOnline as $value) { ?>
        <div class="row">
            <div class="col"><span><?=$value['ip']?></span></div> <!-- col -->
            <div class="col"><span><?php echo date('d-m-Y H:i:s', strtotime($value['ultima_acao'])); ?></span></div> <!-- col -->
            <div class="clear"></div>
        </div> <!-- row -->
        <?php } ?>
    </div> <!-- table-responsive -->

</div> <!-- box-content -->

<div class="clear"></div>