<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver Pedidos  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>
<?php
    $conexion = mysqli_connect("localhost", "root", "", "");
    $result=mysqli_query($conexion,"SELECT usuario FROM pedido");
?>php
<main>
<div class="contenedor_consulta">
    <h1>Pedidos realizados</h1>
    <form action="cons.php" method="POST">
    <input type="submit" value="Ver todos los pedidos">
    </form>
    
</div>
</main>
</body>
</html>