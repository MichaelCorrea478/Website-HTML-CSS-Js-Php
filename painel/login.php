<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">

    <title>Painel de Controle</title>
</head>
<body>
   
    
<div class="box-login">
    <?php

    $pdo = MySql::conectar();

    if (isset($_POST['acao'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];

        $consulta = $pdo->prepare("SELECT * FROM tb_admin_usuarios WHERE user = :user AND password = :password ");
        $consulta->bindParam(':user', $user);
        $consulta->bindParam(':password', $password);
        $consulta->execute();

        if ($consulta->rowCount() == 1) {
            $info = $consulta->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];

            header('Location: ' . INCLUDE_PATH_PAINEL);
            die();
        } else {
            echo "<div class='box-erro'>Usuário ou senha incorretos.</div>";
        }

    }

    ?>
    <h2>Faça o Login:</h2>
    <form method="post" action="">
        <input type="text" name="user" placeholder="Login" required>
        <input type="password" name="password" placeholder="Senha" required>
        <div></div>
        <input type="submit" name="acao" value="Logar">
    </form>


</div> <!-- box-login -->






</body>
</html>