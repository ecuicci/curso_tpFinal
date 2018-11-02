<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
</html>
<div class="col-sm-6 col-sm-offset-3">
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Nuevo Usuario</h3>
    </div>
    <div class="panel-body">
          <form action = "guardarRegistros" method="post">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Nombre y Apellido:</span>
            <input type="text" name="nombre" required  class="form-control" placeholder="Nombre y Apellido " aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Email:</span>
            <input type="email" name="email" requiered  class="form-control" placeholder="Email" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Password</span>
            <input type="password" name="password" required  class="form-control" placeholder="Password" aria-describedby="basic-addon1">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Confirmar Password:</span>
            <input type="password" name="confirpassword" required  class="form-control" placeholder="Password" aria-describedby="basic-addon1">
          </div>
         
    </div>
    <div class="modal-footer">
    <a class="btn btn-default" href="<?=base_url()?>usuarios/index">Volver</a>
      <button type="submit" class="btn btn-primary" >Enviar</button> 
    </div>  
  </form>
        <br>
</div>
</div>
</body>
</html>