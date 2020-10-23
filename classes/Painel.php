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

}













?>