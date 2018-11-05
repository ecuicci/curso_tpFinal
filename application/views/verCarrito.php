<div id="verCarrito" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mi carrito</h4>
      </div>
      <div class="modal-body"> 
      <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Cantidad</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($compras as $compra){?>
            <tr>
                <th scope="row"><?php echo $compra["cantidad"];?>  </th>
                <td><?php echo $compra["prod"];?></td>
                <td><?php echo $compra["precio"];?></td>
                <td><?php echo $compra["precio_total"];?></td>
            </tr>

        <?php }?>
        </tbody>
    </table>
  </div>
  <div class="modal-footer">
      <a class="btn btn-primary" onclick="finalizar(<?php echo $compra['id_carrito'];?>);">Finalizar compra</a> 
   </div>
</div>
</div>
</div>
