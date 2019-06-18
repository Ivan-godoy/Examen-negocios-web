<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema de Matricula UNICAH-MAT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div id="contenedor">
    <h3 id="titulo">Bienvenidos al sistema de matricula de la UNICAH San Isidro</h3>
    <hr>
    <br>
    <ul id="opciones">
        <li><a href="form-registrar-alumno.php">Ver alumnos registrados</a></li>
        <li><a href="ver-alumnos.php">Registrar un nuevo alumno</a></li>
    </ul>
</div>
<div class="container">
    <form action="guardar.php" method="post" enctype="multipart/form-data">
        <div class="form-row justify-content-center"><h1>Ingreso de Alumnos</h1></div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-xl-6 mx-auto">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el Nombre Completo">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-xl-6 mx-auto">
                    <label for="imagen">Ingrese una foto Personal</label>
                    <input type="file" class="form-control" accept="image/*" id="imagen" name="foto">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-xl-6 mx-auto">
                    <label for="email">Correo Electronico</label>
                    <input type="email" name="correo" class="form-control" id="email" placeholder="Ingrese el Nombre Completo">
                </div>
            </div>
        </div>
        <hr>
        <div class="form-row justify-content-center">
            <input type="submit" value="Enviar Datos" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>