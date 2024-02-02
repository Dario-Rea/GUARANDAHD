
function init(){
    $("#usuario_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#usuario_form")[0]);

    $.ajax({
        url: "../controller/usuario.php?op=regitroUsuario",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000
              });
            if (datos=="pass"){
                        Toast.fire({
                            icon: 'error',
                            title: ' Error Contraseñas no Coinciden.'
                        }
                        );

            }else if (datos=="correo"){
                Toast.fire({
                    icon: 'warning',
                    title: 'La cuenta de correo electronico ya existe, intente recuperar su contraseña'
                }
                );
            }else{
                Toast.fire({
                    icon: 'success',
                    title: 'Se registro Correctamente..!'
                }
                );
    
                var usu_correo = $('#usu_correo').val();
                $.post("../controller/email.php?op=send_nuevo", { usu_correo : usu_correo}, function(data){
                
                });
                $('#usuario_form')[0].reset();
            }
            
        }
    }); 
    
}

init(); 