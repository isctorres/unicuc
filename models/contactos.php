<?php
   error_reporting(E_ALL);
   ini_set('display_errors', '1');
    class Contactos{

        private $db;
        public function __construct() {
           $con = new Conexion();
           $this->db = $con->crearConexion();
        }

        public function getContactos(){
            $sql = "SELECT * FROM tbl_contactos";
            $rs = $this->db->Execute($sql);
            return $rs;
        }

        public function insContacto($nombre, $apepat, $apemat, $pais, $email, $tel, $gen, $int){
            /*echo $sql = "INSERT INTO tbl_contactos (nom_contacto, app_contacto, apm_contacto, pais_contacto, email_contacto, tel_contacto, genero_contaco, int_contacto) 
            values('".$nombre."','".$apemat."','".$apemat."','".$pais."','".$email."','".$tel."','".$gen."','".$int."')";*/
            $sql = "INSERT INTO tbl_contactos (nom_contacto, app_contacto, apm_contacto, pais_contacto, email_contacto, tel_contacto, genero_contaco, int_contacto) 
            values(?,?,?,?,?,?,?,?)";
            $prp = $this->db->Prepare($sql);
            $this->db->Execute($prp,array($nombre, $apepat, $apemat, $pais, $email, $tel, $gen, $int));
        }

        public function delContacto($id){
            $sql = "DELETE FROM tbl_contactos WHERE id_contacto =".$id;
            $this->db->Execute($sql);
        }

        public function updContacto($id,$nombre, $apepat, $apemat, $pais, $email, $tel, $gen, $int){

        }
    }
?>