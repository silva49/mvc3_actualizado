<?php

class Conexion{
    public function getConexion(){
        $conexion =new mysqli("localhost" ,"root","","bdsupermercado");
        $conexion->query("SET NAMES 'UTF8'");
        return $conexion;
    }
}



?>