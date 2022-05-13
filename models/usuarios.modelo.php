<?php

require_once "conexion.php";
class ModeloUsuario{

    public static function MdlMostrarUsuario($table, $item, $valor){

        $consulta = Conexion::conectar()->prepare("SELECT * from ".$table . " WHERE ".$item." = '$valor'");

        $consulta->execute();

        return $consulta->fetch();

    }
}