<?php
    if(!empty($_POST)){
        $nombre = $_POST['nombre'] ?? '';
        $foto = $_FILES['foto']['name'] ?? '';
        $email = $_POST['correo'] ?? '';
        $url = 'imagenes/'.$foto;
        if(!empty($foto) && !empty($nombre) && !empty($email)){
            move_uploaded_file($_FILES['foto']['tmp_name'], $url);
            try{
                $pdo = new PDO('mysql:dbname=registro;host:127.0.0.1', 'root', '');
                $stmt = $pdo->prepare('INSERT INTO alumnos (nombre_completo, imagen, correo) VALUES (?,?,?)');
                $stmt -> bindValue(1, $nombre);
                $stmt -> bindValue(2, $url);
                $stmt -> bindValue(3, $email);
                $stmt->execute();
                echo '<div class="container"><div class="row justify-content-center"><h1>Guardado</h1></div></div>';
            }catch (mysqli_sql_exception $e){
                echo $e;
            }
        }else{
            echo '<div class="container"><div class="row justify-content-center"><h1>Todos los campos son Necesarios</h1></div></div>';
        }


    }
?>

