<?php
 
 include "conexion_be.php";
 $sql="SELECT * FROM pedido";
 $result=mysqli_query($conexion,$sql);
while($r=mysqli_fetch_array($result)){
   
    echo "id: ".$r[0]."</br>";
    echo "Código del pedido: ".$r[1]."</br>";
    echo "Cliente: ".$r[2]."</br>";
    echo "Código del producto: ".$r[3]."</br>";
    echo "Cantidad: ".$r[4]."</br>";
    echo "<hr></hr>";
}
 mysqli_close($conexion);
 
 ?>
