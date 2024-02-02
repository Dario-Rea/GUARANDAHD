<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog"
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
                <form method="post" id="usuario_form">
                    <div class="row">

                        <input type="hidden" id="usu_id" name="usu_id">

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label" for="usu_nom">Nombre</label>
                                <input type="text" class="form-control" id="usu_nom" name="usu_nom"
                                    placeholder="Ingrese Nombre" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label" for="usu_ape">Apellido</label>
                                <input type="text" class="form-control" id="usu_ape" name="usu_ape"
                                    placeholder="Ingrese Apellido" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="usu_correo">Correo Electronico</label>
                                <input type="email" class="form-control" id="usu_correo" name="usu_correo"
                                    placeholder="test@test.com" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="usu_pass">Contraseña</label>
                                <input type="text" class="form-control" id="usu_pass" name="usu_pass"
                                    placeholder="************" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label" for="rol_id">Rol</label>
                                <select class="select2" id="rol_id" name="rol_id">
                                    <option value="0">Seleccione..!</option>
                                    <option value="1">Usuario</option>
                                    <option value="2">Soporte</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label" for="asignar">Puede Asignar</label>
                                <select class="select2" id="asignar" name="asignar">
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                </select>
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