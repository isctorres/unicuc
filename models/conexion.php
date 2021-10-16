<?php
class Conexion 
{
    public function __construct() {}
    public function crearConexion(){
        $db = newADOConnection('mysqli');
        $db->connect("127.0.0.1", "root", "", "unicuc");
        return $db;
    }
}
?>