<?php
    include_once('../utils/adodb5/adodb.inc.php');
    include_once('../models/conexion.php');
    include_once('../models/contactos.php');

    $opc = $_GET['opc'];
    switch($opc){
        case 1: // insert a la base de datos

            $nom  = $_POST['txtNombre'];
            $app  = $_POST['txtApePat'];
            $apm  = $_POST['txtApeMat'];
            $pais = $_POST['sltPais'];
            $mail = $_POST['txtEmail'];
            $tel  = $_POST['txtTelefono'];
            $gen  = $_POST['rdbGenero'];
            $int  = $_POST['chkInteres'];

            $contactos = new Contactos();
            $contactos->insContacto($nom, $app, $apm, $pais, $mail, $tel, $gen, $int);
            //echo 'Registro Insertado';
            break;
        case 2: // Borrado de contactos
            $id = $_GET['id'];
            $contactos = new Contactos();
            $contactos->delContacto($id);
            break;
        case 3:
            $id   = $_GET['id'];
            $nom  = $_POST['txtNombre'];
            $app  = $_POST['txtApePat'];
            $apm  = $_POST['txtApeMat'];
            $pais = $_POST['sltPais'];
            $mail = $_POST['txtEmail'];
            $tel  = $_POST['txtTelefono'];
            $gen  = $_POST['rdbGenero'];
            $int  = $_POST['chkInteres'];

            $contactos = new Contactos();
            $contactos->updContacto($id,$nom, $app, $apm, $pais, $mail, $tel, $gen, $int);


    }

    header('location:../gestion_contactos.php');

?>