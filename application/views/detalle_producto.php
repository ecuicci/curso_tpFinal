<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
   
    <title>Detalle del producto</title>
   
</head>
<body>
   <h3>Detalle del producto <?=$resultado["Nombre"]?></h3>  <br><br>  
   <?php 
           echo "<b> Codigo de producto:</b> ". $resultado['Id']." <br>  ";
           echo "<b> Nombre:</b> ". $resultado['Nombre'] . "<br>  ";
           echo" <b> Precio:</b> ". $resultado['Precio'] . "  <br> ";
           echo" <b> En Stock: </b>". $resultado['enStock']." <br> ";
           echo "<br>";
       ?> 
        <a href="<?=base_url()?>Productos/index ">Volver al listado de productos </a><br>
</body>
</html>