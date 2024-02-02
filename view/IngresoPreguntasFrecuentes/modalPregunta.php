<div id="modalPreguntaFrecuente" class="modal fade bd-example-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="mdltitulo"></h4>
            </div>
            <div class="modal-body">
                <form method="post" id="pregunta_form">
                    <div class="row">
                    <input type="hidden" id="id_pregfrec" name="id_pregfrec">
                    <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="Preg_frecuente">Pregunta Frecuentes</label>
                                <input type="text" class="form-control" id="Preg_frecuente" name="Preg_frecuente" placeholder="Ingrese la pregunta">
                            </fieldset>
                        </div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="lblsolucion">Solución</label>
                            	<div class="summernote-theme-1">
									<textarea id="lblsolucion" name="lblsolucion" class="summernote" ></textarea>
								</div>
							</fieldset>
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" name="action" id="#" value="add"
                            class="btn btn-rounded btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
