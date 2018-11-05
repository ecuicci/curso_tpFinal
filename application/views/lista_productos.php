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

    function verCarrito(){    
        $("#verCarrito").modal('show');
     }
        
        
    function finalizar(idCarrito){
        var parametros = {        
            "idCarrito" : idCarrito
        };
         $.ajax({
                type: "POST",
                dataType:"json",
                async:"true",
                data: parametros, 
                url: "<?=base_url()?>Productos/finalizar", 
                beforeSend: function () {    
                    $('*').css('cursor','progress');                    
                },
                
                success: function (datos){ 
                    console.log(datos);
                    $('*').css('cursor','context-menu'); 
                    
    }
    })

</script>
</head>

   <?php if(isset($usuario)){?>
        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Bienvenid@ </strong><?php echo $_SESSION["name"];?>
            </div> 
    <?php } ?> 
    <?php if(isset($mensaje)){?>
        <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $mensaje;?>
            </div> 
    <?php } ?> 
<div class="col-sm-6 col-sm-offset-3">
<div class="panel panel-primary">    
         <div class="panel-heading">
               <h3 class="panel-title">Productos</h3>
         </div>
         <div class="panel-body">
            <h5>Haga click en el nombre del producto para mas detalles:</h5>
            <?php
            foreach ($productos as $prod)
                {?>
                <a href="<?=base_url()?>Productos/detalle/<?=$prod['id']?> "><?=$prod['nombre']?> </a><br>                    
                <?php } ?>
         </div>
        <div class="modal-footer">
                <a class="btn btn-primary" onclick="verCarrito();">ver Carrito</a> 
        </div>
    </div> 
    <?php include_once ("verCarrito.php")?>
</body>

</div>
</div>  
   
   
</body>
</html>