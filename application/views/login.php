<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<?php 
if(isset($mensaje)){
    if($tipo_mensaje == "info"){?>
      <div class="alert alert-info">
    <?php }else{?>
      <div class="alert alert-warning">
   <?php } ?>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong></strong> <?php echo $mensaje?>
  </div>
<?php } ?>

<div class="col-sm-6 col-sm-offset-3">
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Inicie Sesion</h3>
    </div>
    <div class="panel-body">
        <form action= "<?=base_url()?>/usuarios/validar" method="post">
          <?php
          $correo = "";
          $password = "";
          ?>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Correo</span>
            <input type="mail" name="correo" required  class="form-control" placeholder="Correo" aria-describedby="basic-addon1">
          </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Password</span>
            <input type="password" name="password" required  class="form-control" placeholder="password" aria-describedby="basic-addon1">
          </div>
       <br>
      </div>
      <div class="modal-footer">
            <a class="btn btn-default" href="<?=base_url()?>usuarios/registrese">Regístrese</a>
            <button type="submit" class="btn btn-primary" >Ingresar</button> 
            
          </div> 
       
    </div>
</div>
</div>
 
</html>
