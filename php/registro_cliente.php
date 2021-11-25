<?php

 include 'conexion.php';

  $id = $_POST['id'];
  $contrasena = $_POST['contrasena'];

  $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE id='$id' and contrasena='$contrasena'");
   
 if(mysqli_num_rows($validar_login) > 0){
      header("location: http://localhost/login-register/index.php");
      exit;
 }else{
     echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
    ';
    exit;
 }

?>