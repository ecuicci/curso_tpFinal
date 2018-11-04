<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
var precio = "<?php echo $resultado['precio'];?>"
var idProd = "<?php echo $resultado['id'];?>"
        function comprar(idProd){
                    var producto =  "<?php echo $resultado["nombre"];?> "
                    $('#mproducto').val( producto); 
                    $('#mtotal').val( precio); 
                    $('#mcantidad').val(1); 
                    $('#idProd').val(idProd); 
                    $("#comprar").modal('show'); 
        }
    function recalcular(){
        cant = $('#mcantidad').val(); 
        console.log (cant);
        totalActual = precio * cant;
        $('#mtotal').val(totalActual); 
       
    };
$(document).ready(function () {
    
$('#agregarAlCarrito').click(function (e) { 
        console.log("llega");
        $('#formComprar').submit();  
        
    });

    
});
</script>

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
                <a class="btn btn-primary" onclick="comprar(<?php echo $resultado['id']?>);">Comprar</a> 
            <?php }else{?>
                <a class="btn btn-default" disabled >Comprar</a> 
            <?php } ?>       
      </div>
    </div> 
    <?php include_once ("comprar.php")?>
</body>
