<?php

include_once('../utils/adodb5/adodb.inc.php');
class Conexion 
{
    public function __construct() {}
    public function crearConexion(){
        $db = newADOConnection('mysqli');
        $db->connect("127.0.0.1", "root", "p31n3t1n", "unicuc");
        return $db;
    }
}




?>