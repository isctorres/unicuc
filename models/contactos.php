<?php
    include_once('./conexion.php');
    class Contactos{

        private $db;
        public function __construct() {
           $con = new Conexion();
           $this->db = $con->crearConexion();
        }

        public function getContactos(){
            $sql = "SELECT * FROM tbl_contactos";
            $rs = $this->db->Execute($sql);
            while(!$rs->EOF){
                echo $rs->fields[0];
                $rs->MoveNext();
            }
        }
    }

    $contactos = new Contactos();
    $contactos->getContactos();


?>