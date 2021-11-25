<?php 
    include "conexion_be.php";

    $codigo_prod = $_POST['codigo_prod'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO producto(codigo_prod, descripcion, precio) 
              VALUES('$codigo_prod', '$descripcion', '$precio')";

    $verificar_codigo_prod = mysqli_query($conexion, "SELECT * FROM producto WHERE codigo_prod='$codigo_prod' ");

     if(mysqli_num_rows($verificar_codigo_prod) > 0){
          echo '
           <script> 
           alert("Este código ya existe, intenta con uno diferente");
           window.location = "../index_producto";
           </script>
       ';
  exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Producto registrado exitosamente");
            window.location = "../index_producto";
        </script>
        ';
    } else {
        echo '
            <script>
                  alert("Inténtelo de nuevo, producto no registrado");
                  window.location = "../index_producto";
            </script>
        ';
    }
    mysqli_close($conexion);