<div class="box-content">
    <h2><i class="fa fa-pencil"></i> Editar Usuário</h2>
        <form method="post" enctype="multipart/form-data">

        <?php
            if (isset($_POST['acao'])) {

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $password = $_POST['password'];
                $imagem = $_FILES['img'];

                $usuario = new Usuario();

                $atualizado = false;

                if ($imagem['name'] != '') {
                    if (Painel::validaImagem($imagem)) {
                        if (Painel::uploadFile($imagem)) {
                            //Painel::deleteFile($_SESSION['img']);
                        }
                        $atualizado = $usuario->atualizarUsuario($id, $nome, $password, $imagem['name']);
                    } else {
                        Painel::alert('erro', 'Formato de imagem inválida.');
                    }
                } else {
                    $atualizado = $usuario->atualizarUsuario($id, $nome, $password);
                }

                if ($atualizado) {
                    Painel::alert('sucesso', 'Usuário atualizado com sucesso.');
                    $_SESSION['nome'] = $nome;
                    $_SESSION['password'] = $password;
                    $_SESSION['img'] = ($imagem['name'] != '') ? $imagem['name'] : $_SESSION['img'];
                } else {
                    Painel::alert('erro', 'Erro ao atualizar usuário.');
                }



            }



        ?>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required value="<?=$_SESSION['nome']?>">
            </div> <!-- form-group -->
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" required value="<?=$_SESSION['password']?>">
            </div> <!-- form-group -->
            <div class="form-group">
                <label for="img">Imagem:</label>
                <input type="file" name="img">
            </div> <!-- form-group -->
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
                <input type="submit" name="acao" value="Atualizar">
            </div>
        </form>
    
</div> <!-- box-content -->