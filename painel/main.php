<?php

include('../config.php');

if(Painel::logado() == false) {
    header('Location: ' . INCLUDE_PATH_PAINEL);
    die();
} 

?>

<h1>Usuario logado</h1>
<h2>Painel</h2>
<p>Usuário: <?=$_SESSION['user']?></p>
 