<?php
    include_once('./utils/adodb5/adodb.inc.php');
    include_once('./models/conexion.php');
    include_once('./models/contactos.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Contactos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="https://www.unicuc.mx">UNICUC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="./index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Docentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellio Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Interes</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            $contactos = new Contactos();  
            $rs = $contactos->getContactos();
            while(!$rs->EOF){
            ?>
                <tr>
                    <th scope="row"><?php echo $rs->fields[0];?></th>
                    <td><?php echo $rs->fields[1];?></td>
                    <td><?php echo $rs->fields[2];?></td>
                    <td><?php echo $rs->fields[3];?></td>
                    <td><?php echo $rs->fields[4];?></td>
                    <td><?php echo $rs->fields[5];?></td>
                    <td><?php echo $rs->fields[6];?></td>
                    <td><?php echo $rs->fields[7];?></td>
                    <td><?php echo $rs->fields[8];?></td>
                    <td><a class="btn btn-danger" href="./controllers/ctr_contactos.php?opc=2&id=<?php echo $rs->fields[0]?>" role="button">Borrar</a></td>
                    <td><a class="btn btn-primary" href="actualizar_contacto.php?id=<?php echo $rs->fields[0]?>&nombre=<?php echo $rs->fields[1]?>" role="button">Editar</a></td>
                </tr>
            <?php
                $rs->MoveNext();
            }
            ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>