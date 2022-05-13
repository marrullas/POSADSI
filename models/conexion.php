<?php

class Conexion{

    public static function conectar(){

        $conexion = new PDO("mysql:host=localhost;dbname=pos","root","root");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;

    }
}