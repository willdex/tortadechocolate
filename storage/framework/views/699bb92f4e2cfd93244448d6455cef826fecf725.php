<!-- Modal -->
<div id="ModalAdjudicarP" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Adjudicación Parcial</b></h3>
      </div> 


      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


      <?php echo e(Form::open(array('url' => 'adjudicarParcial'))); ?>

         
              <div class="form-group">


                  <input type="hidden" class="form-control" name="txtidpublic" id="txtidpublic">

                  <input type="hidden" class="form-control" name="txttitulo" id="txttitulo">
      
                  <input type="hidden" class="form-control" name="txtcat" id="txtcat">

                  <?php echo Form::label('titulo2','Título:'); ?>

                  <input type="text" class="form-control" name="txttitulo2" id="txttitulo2" disabled>
                  <br>

                  <?php echo Form::label('estado','Estado:'); ?>

                  <input type="text" class="form-control" name="txtestado" id="txtestado" value="activa" disabled>
                  <br>

                  <?php echo Form::label('categoria2','Categoría:'); ?>

                  <input type="text" class="form-control" name="txtcat2" id="txtcat2" value="" disabled>
                  <br>

                   <!--?php $prov = DB::select('SELECT proveedor.id, proveedor FROM proveedor, prov_cat,categoria WHERE proveedor.id=prov_cat.id AND categoria.idcat=prov_cat.idcat AND categoria.nombre="" '); 
                   ?-->

                   <?php $prov = DB::select('SELECT * FROM proveedor'); 
                   ?>
                    
                    <?php echo Form::label('proveedor','Proveedor:'); ?>

                  <select name="cboproveedorP" id="cboproveedorP" class="form-control selectpicker" data-live-search="true" required>
                    <option value=""> Seleccione Proveedor... </option>
                      <?php foreach($prov as $movC): ?>
                        <option value="<?php echo e($movC->id); ?>"><?php echo e($movC->proveedor); ?></option>
                      <?php endforeach; ?>
                  </select>
                  <br><br>

                  <label>Detalle:</label>
                  <textarea class="form-control" rows="5" name="mensajeAd" id="mensajeAd" placeholder="Detalle de la adjudicacion" required style="border-radius: 5px; width: 100%;"></textarea>
                  <br>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoAdP" style="display: none;">

              </div>    

        </div>
      </div>


      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
           <?php echo Form::submit('ACEPTAR',['class'=>'btn btn-primary','id'=>'btnAdjudicarP','name'=>'btnAdjudicarP']); ?>


          <?php echo Form::close(); ?>


          <button data-dismiss="modal" class="btn btn-danger" name="btnAdjudicarCancelarP" id="btnAdjudicarCancelarP">CANCELAR</button>

        </div>
      </div>

    </div>
  </div>
</div>
