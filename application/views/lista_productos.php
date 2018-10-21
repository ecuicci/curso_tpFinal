<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
   
    <title><?=$title?></title>
   
</head>
<body>
   
   <h2>Productos</h2>
   <h3>Haga click en el nombre del producto para mas detalles:</h3>
   <?php foreach ($productos as $prod)
       {?>
   
       <a href="<?=base_url()?>Productos/detalle/<?=$prod['Id']?> "><?=$prod['Nombre']?> </a><br>
        
       <?php } ?>
</body>
</html>