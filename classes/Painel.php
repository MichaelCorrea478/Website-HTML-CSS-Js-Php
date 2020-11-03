<?php


class Painel {

    public static function logado() {
        return (isset($_SESSION['login'])) ? true : false;
    }

    public static function logout() {
        session_destroy();
        header('Location: ' . INCLUDE_PATH_PAINEL);
    }

    public static function loadPage() {
        if (isset($_GET['url'])) {
            
            $url = explode('/', $_GET['url']);

            if (file_exists('pages/' . $url[0] . '.php')) {
                include('pages/' . $url[0] . '.php');
            } else {
                header('Location: ' . INCLUDE_PATH_PAINEL);
            }

        } else {
            include('pages/home.php');
        }
    }

    public static function listarUsuariosOnline() {

        self::limparUsuariosOnline();

        $sql = MySql::conectar()->query("SELECT * FROM tb_admin_users_online ");

        return $sql->fetchAll();

    }

    public static function limparUsuariosOnline() {
        
        $dataHora = date('Y-m-d H:i:s');

        $sql = MySql::conectar()->query("DELETE FROM tb_admin_users_online 
                                            WHERE ultima_acao < '{$dataHora}' - INTERVAL 1 MINUTE ");

    }

    public static function getTotalVisitas() {

        $sql = MySql::conectar()->query("SELECT * FROM tb_admin_visitas ");

        return $sql->rowCount();

    }

    public static function getVisitasHoje() {

        $hoje = date('Y-m-d');

        $sql = MySql::conectar()->query("SELECT * FROM tb_admin_visitas WHERE dia = '{$hoje}' ");

        return $sql->rowCount();

    }

    public static function alert($type, $msg) {

        switch ($type) {
            case 'sucesso':
                echo "<div class='box-alert sucesso'>{$msg}</div>";
            break;
            case 'erro':
                echo "<div class='box-alert erro'>{$msg}</div>";
            break;

        }

    }

    public static function validaImagem($imagem) {

        $validas = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');

        return (in_array($imagem['type'], $validas) && $imagem['size'] < (2*1024*1024));

    }

    public static function uploadFile($file) {

        return move_uploaded_file($file['tmp_name'], DIR_PAINEL . 'uploads/' . $file['name']);

    }

    public static function deleteFile($file) {

        unlink('uploads/' . $file);

    }

}



?>