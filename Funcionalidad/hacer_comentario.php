<?php
    require_once('../Conexion/Conexion.php');

    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    

        $sql = "INSERT INTO comentarios (correo, nombre, comentario) VALUES ('".$correo."','".$nombre."','".$comentario."')";

            $insert = $conn->query($sql) or die (mysqli_errno($conn));

            if($insert)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
?>