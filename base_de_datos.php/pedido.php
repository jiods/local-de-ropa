<?php 
    
    include "conexion.php";

    $codigo_pedido = $_POST['codigo_pedido'];
    $id = $_POST['id'];
    $codigo_producto = $_POST['codigo_producto'];
    $cantidad = $_POST['cantidad'];
    

    $query = "INSERT INTO pedido(codigo_pedido, id, codigo_producto, cantidad) 
              VALUES('$codigo_pedido', '$id', '$codigo_producto', '$cantidad')";

    $verificar_codigo_pedido = mysqli_query($conexion, "SELECT * FROM pedido WHERE codigo_pedido='$codigo_pedido' ");

       if(mysqli_num_rows($verificar_codigo_pedido) < 0){
           echo '
              <script> 
                 alert("Este código ya existe, intenta con uno diferente");
                 window.location = "../index_pedido.php";
               </script>
           ';
      exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

   if ($ejecutar) {
        echo '
        <script>
            alert("Pedido cargado exitosamente");
            window.location = "../index_pedido.php";
        </script>
        ';
    } else {
        echo '
            <script>
                  alert("Inténtelo de nuevo, pedido no cargado");
                  window.location = "../index_pedido.php";
            </script>
        ';
    }
    mysqli_close($conexion);