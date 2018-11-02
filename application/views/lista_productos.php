<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

   <?php if(isset($usuario)){?>
        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Bienvenid@ </strong><?php echo $usuario["nombre"];?>
            </div> 
    <?php } ?> 
<div class="col-sm-6 col-sm-offset-3">
<div class="panel panel-primary">    
         <div class="panel-heading">
               <h3 class="panel-title">Productos</h3>
         </div>
         <div class="panel-body">
            <h5>Haga click en el nombre del producto para mas detalles:</h5>
            <?php foreach ($productos as $prod)
                {?>
                <a href="<?=base_url()?>Productos/detalle/<?=$prod['id']?> "><?=$prod['nombre']?> </a><br>                    
                <?php } ?>
         </div>
</div>
</div>  
   
   
</body>
</html>