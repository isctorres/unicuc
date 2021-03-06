<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>

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
            <h3>Datos del contacto</h3>
            <hr>
            <form action="controllers/ctr_contactos.php?opc=3&id=<?php echo $_GET['id']?>" method="post">
                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $_GET['nombre']?>">
                </div>

                <div class="form-group">
                    <label for="txtApePat">Apellido Paterno</label>
                    <input type="text" name="txtApePat" id="txtApePat" class="form-control" placeholder="Ingrese el apellido paterno">
                </div>

                <div class="form-group">
                    <label for="txtApeMat">Apellido Materno</label>
                    <input type="text" name="txtApeMat" id="txtApeMat" class="form-control" placeholder="Ingrese el apellido materno">
                </div>

                <div class="form-group">
                    <label for="sltPais">Pa??s</label>
                    <select name="sltPais" id="sltPais" class="form-control">
                        <option value="M??xico">M??xico</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Bras??l">Bras??l</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="txtEmail">Correo Electr??nico</label>
                    <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Ingrese su email">
                </div>

                <div class="form-group">
                    <label for="txtTelefono">Tel??fono</label>
                    <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="Ingrese su tel??fono">
                </div>

                <div class="form-group">
                    <label for="rdbGenero">G??nero</label>
                    
                    <div class="form-check">
                        <label for="rdbGenero">
                            <input type="radio" name="rdbGenero" id="rdbMasculino" value="M">
                            Masculino
                        </label>
                    </div>

                    <div class="form-check">
                        <label for="rdbGenero">
                            <input type="radio" name="rdbGenero" id="rdbFemenino" value="F">
                            Femenino
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Intereses</label>
                    <div class="form-check">
                        <label for="chkInteres">
                            <input type="checkbox" name="chkInteres" id="chkInteres1" value="PHP">
                            PHP
                        </label>
                    </div>
                    <div class="form-check">
                        <label for="chkInteres">
                            <input type="checkbox" name="chkInteres" id="chkInteres2" value="JAVA">
                            JAVA
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-info">Enviar Solicitud de Contacto</button>
            </form>
        </div>
    </main>
</body>
</html>