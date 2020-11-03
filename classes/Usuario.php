<?php

class Usuario {

    public function atualizarUsuario($id, $nome, $password, $img = null) {

        $stmt = "UPDATE tb_admin_usuarios SET nome = :nome, password = :password ";
        if ($img != null) {
            $stmt .= ", img = :img";
        }
        $stmt .= " WHERE id = :id ";

        $sql = MySql::conectar()->prepare($stmt);
        $sql->bindParam(':nome', $nome);
        $sql->bindParam(':password', $password);
        if ($img != null) {
            $sql->bindParam(':img', $img);
        }
        $sql->bindParam(':id', $id);

        $result = $sql->execute();

        return $result;

    }

}











?>