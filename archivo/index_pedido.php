<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pedidos - abm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
<main>
<?php
include "conexion.php";
?>
   <div class="contenedor__pedidos"> 
                  <form action="php/pedido.php" method="POST" class="formulario__pedidos">
                      <h2>Pedidos</h2>
                      <input type="text" placeholder="Código del pedido" name="codigo_pedido">
                      <input type="text" placeholder="Cantidad" name="cantidad">
                    <br></br>
                    <select name="codigo_producto" codigo_producto="" required>
                    <option disabled selected>Selecciona el código del producto</option>
                   <?php
                  $pedido=$conexion -> query("SELECT * FROM producto");
                  while($fila=$pedido->fetch_array()){
                      echo"<option value = '".$fila['codigo_producto']."'>".$fila['codigo_producto']."</option>";
                  }
                   ?>
                  </select>
                  <br></br>
                 <select name="cliente" usuario="" required>
                 <option disabled selected>Selecciona un cliente</option>
                   <?php
                  $resultado=$conexion -> query("SELECT * FROM cliente");
                  while($valor=$resultado->fetch_array()){
                      echo"<option value = '".$valor['usuario']."'>".$valor['usuario']."</option>";
                  }
                   ?>
                  </select>
                      <button>Cargar Pedido</button>
                  </form>
         </div>
        </main>
        <script src="assets/js/script.js"></script>
     </body>
</html>