function init(){
    
}

$(document).ready(function() {
    
});

$(document).on("click","#btnrecuperar", function(){

    var usu_correo = $('#usu_correo').val();
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000
      });

    if(usu_correo ==""){
        Toast.fire({
            icon: 'error',
            title: ' Ingrese su correo para recuperar la clave'
        }
        );
    }else{ 
        $.post("../controller/usuario.php?op=correo", { usu_correo : usu_correo}, function(data){
            if (data=='[]'){
                Toast.fire({
                    icon: 'error',
                    title: ' Usuario no Registrado'
                }
                );
            }else{
                $.post("../controller/email.php?op=send_recuperar", { usu_correo : usu_correo}, function(data){
                    $('#usu_correo').val('');
                });

                Toast.fire({
                    icon: 'success',
                    title: ' Su clave se envio a su correo'
                }
                );
            }
        });
    }

});

init();