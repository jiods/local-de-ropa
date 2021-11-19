<?php 
    
    include "conexion.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $id = $_POST['id'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuario(nombre, apellido, mail, id, contrasena) 
              VALUES('$nombre', '$apellido', '$mail', '$id', '$contrasena')";

    $verificar_id = mysqli_query($conexion, "SELECT * FROM usuario WHERE id='$id' ");

    if(mysqli_num_rows($verificar_id) > 0){
        echo '
            <script> 
               alert("Este id ya esta siendo utilizado , intenta con uno nuevo");
               window.location = "../index.php";
            </script>
        ';
       exit();
    }
    
    $verificar_mail = mysqli_query($conexion, "SELECT * FROM usuario WHERE mail='$mail' ");

    if(mysqli_num_rows($verificar_mail) > 0){
        echo '
            <script> 
               alert("Este mail ya esta registrado. Intente nuevamente.");
               window.location = "../index.php";
            </script>
        ';
       exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("id registrado con exito.");
            window.location = "../index.php";
        </script>
        ';
    } else {
        echo '
            <script>
                  alert("Inténtelo de nuevo, id no registrado");
                  window.location = "../index.php";
            </script>
        ';
    }
    mysqli_close($conexion);


