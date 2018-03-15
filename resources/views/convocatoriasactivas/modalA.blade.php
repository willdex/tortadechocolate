<!-- Modal -->
<div id="ModalAdjuntar" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Envíe su Propuesta</b></h3>
      </div> 


             <div class="row">

            
            <div class="col-md-12">
            <form  id="f_enviar_correo" name="f_enviar_correo"  action="enviar_correo"  class="formarchivo" enctype="multipart/form-data" method="post" >

             <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

                  <div class="box box-primary">
                    <div class="box-header with-border" align="center">
                      <h2 class="box-title">Escriba su mensaje y Adjunte su propuesta</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    
                     <!-- <div class="form-group">
                        <input class="form-control" placeholder="Para:" id="destinatario" name="destinatario">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="Asunto:" id="asunto" name="asunto">
                      </div>-->
                      <div class="form-group">
                        <textarea id="contenido_mail" name="contenido_mail" class="form-control" style="height: 200px" placeholder="escriba aquí...">
                         
                        </textarea>
                      </div>
                      <div class="form-group">
                        <div class="btn btn-default btn-file">
                          <i class="fa fa-paperclip" ></i> Adjuntar Archivo
                          <input type="file"  id="file" name="file" class="email_archivo" value="1" >
                        </div>
                        <p class="help-block"  >Max. 20MB</p>
                        <div id="texto_notificacion"><span id="display"></span>
                        
                        </div>
                      </div>

                

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                     
                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> ENVIAR</button>


          {!!Form::close()!!}

          <button data-dismiss="modal" class="btn btn-danger" name="btnAdjudicarCancelarC" id="btnAdjudicarCancelarC">CANCELAR</button>

                      </div>
                   <br/>
                    </div><!-- /.box-footer -->
                  </div><!-- /. box -->

              </form>
            </div><!-- /.col -->
          </div><!-- /.row -->
              
   <script src="js/sistemalaravel.js"></script>

    <script>
     
      function activareditor(){   
        $("#contenido_mail").wysihtml5();
      };

      activareditor();
    </script>



    </div>
  </div>
</div>
