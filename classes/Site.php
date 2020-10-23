<?php

class Site {

    public static function updateUsuarioOnline() {

        if (isset($_SESSION['online'])) {

            $token = $_SESSION['online'];
            $hora = date('Y-m-d H:i:s');

            $check = MySql::conectar()->query("SELECT id FROM tb_admin_users_online WHERE token = '{$token}' ");

            if ($check->rowCount() == 1) {
                $sql = MySql::conectar()->prepare("UPDATE tb_admin_users_online 
                                                SET ultima_acao = :ultima_acao
                                                WHERE token = :token ");
                $sql->bindParam(':ultima_acao', $hora);
                $sql->bindParam(':token', $token);

                $sql->execute();
            } else {
                self::registraSessao($_SESSION['online']);
            }

        } else {

            self::registraSessao($_SESSION['online']);

        }

    }

    private static function registraSessao($token) {

        if (!isset($token)) {
            $_SESSION['online'] = uniqid();
            $token = $_SESSION['online'];
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        $hora = date('Y-m-d H:i:s');

        $sql = MySql::conectar()->prepare("INSERT INTO tb_admin_users_online (ip, ultima_acao, token)
                                            VALUES (:ip, :ultima_acao, :token) ");
        $sql->bindParam('ip', $ip);
        $sql->bindParam('ultima_acao', $hora);
        $sql->bindParam('token', $token);

        $sql->execute();

    }

    public static function contador() {

        if (!isset($_COOKIE['visita'])) {

            setcookie('visita', 'true', time() + (60*60*24*7));

            $ip = $_SERVER['REMOTE_ADDR'];
            $dia = date('Y-m-d');

            $sql = MySql::conectar()->prepare("INSERT INTO tb_admin_visitas (ip, dia)
                                            VALUES (:ip, :dia) ");
            $sql->bindParam(':ip', $ip);
            $sql->bindParam(':dia', $dia);

            $sql->execute();

        }

    }

}











?>