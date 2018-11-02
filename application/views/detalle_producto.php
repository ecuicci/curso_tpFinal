<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
   <div class="panel panel-primary" style="width:50%">
      <div class="panel-heading">
            <h3 class="panel-title">Detalle del producto <?=$resultado["nombre"]?></h3>
      </div>
      <div class="panel-body">
        <?php 
            echo "<b> Codigo de producto:</b> ". $resultado['id']." <br>  ";
            echo "<b> Nombre:</b> ". $resultado['nombre'] . "<br>  ";
            echo" <b> Precio:</b> ". $resultado['precio'] . "  <br> ";
            echo" <b> En Stock: </b>". $resultado['enStock']." <br> ";
            echo "<br>";
        ?> 
      </div>  
      <div class="modal-footer">
          <a class="btn btn-default" href="<?=base_url()?>Productos/index">Volver al listado de productos </a>
            <?php if($resultado['enStock'] !== "No"){?> 
                <a class="btn btn-primary" href="<?=base_url()?>Productos/comprar/<?=$resultado['id']?>">Comprar</a> 
            <?php }else{?>
                <a class="btn btn-default" disabled href="<?=base_url()?>Productos/comprar/<?=$resultado['id']?>">Comprar</a> 
            <?php } ?>       
      </div>
    </div> 
</body>
