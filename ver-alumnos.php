<?php
    $pdo = new PDO('mysql:dbname=registro;host:127.0.0.1', 'root', '');
    $alumnos = $pdo->query('SELECT * FROM alumnos');
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
<div class="container" id="mostar">
    <?php foreach ($alumnos as $alumno):?>
    <div class="card" style="width: 18rem; float: left; margin: 5vh">
        <img src="<?php echo $alumno['imagen']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $alumno['nombre_completo']?></h5>
            <p class="card-text"><?php echo $alumno['correo']?></p>
        </div>
    </div>
    <?php endforeach;?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
