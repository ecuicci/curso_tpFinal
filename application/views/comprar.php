<div id="comprar" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Comprar</h4>
      </div>
      <div class="modal-body">  
      <form id="formComprar" name="formComprar" method="POST" action="<?=base_url()?>Productos/comprar" enctype="multipart/form-data">   
      <div class="form-group input-group" style="width:100%;">
          <div class="input-group" style="width:100%;"> 
          
            <span class="input-group-addon" style="width: 30%; text-align: left;">Producto</span>
            <span style="width: 70%;"><input type="text" class="form-control" readonly style="background-color:#F8F8F8; text-align: left;" id="mproducto"/></span>
          </div>
        </div>
        <div class="form-group input-group" style="width:30%;">
          <div class="input-group" style="width:100%;">
            <span class="input-group-addon" style="width: 30%; text-align: left;">Cantidad</span>
            <span style="width: 70%;"><input type="number"  min="1" class="form-control" style="background-color:#F8F8F8; text-align: left;" onchange="recalcular();" name="mcantidad" id="mcantidad"/></span>
          </div>
        </div>
        <div class="form-group input-group" style="width:30%;">
          <div class="input-group" style="width:100%;">
            <span class="input-group-addon" style="width: 30%; text-align: left;">Total</span>
            <span style="width: 70%;"><input type="number" readonly class="form-control" style="background-color:#F8F8F8; text-align: left;" id="mtotal"/></span>
          </div>
        </div>
        
        <input type="hidden" name="idProd" id="idProd" class="form-control" value="">
        
      </form>
       </div>

  <div class="modal-footer">
      <input class="btn btn-primary" type="button" value="Agregar al carrito" id="agregarAlCarrito">
      <a href="#" class="btn btn-default" data-dismiss="modal" id="cancelar">Cancelar</a>          
  </div>
   
  </div>
</div>  