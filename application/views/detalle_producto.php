<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Detalle del producto</title>
   
</head>
<body>
   <h3>Detalle del producto <?=$resultado["nombre"]?></h3>  <br><br>  
   <?php 
           echo "<b> Codigo de producto:</b> ". $resultado['id']." <br>  ";
           echo "<b> Nombre:</b> ". $resultado['nombre'] . "<br>  ";
           echo" <b> Precio:</b> ". $resultado['precio'] . "  <br> ";
           echo" <b> En Stock: </b>". $resultado['enStock']." <br> ";
           echo "<br>";
       ?> 
        <a href="<?=base_url()?>Productos/index ">Volver al listado de productos </a><br>
</body>
</html>