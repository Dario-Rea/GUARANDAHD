$(document).on("click","#btnactualizar", function(){
  var passactual= $("#txtactual").val();
  var passnuevo= $("#txtnuevo").val();
  var passconfirmar= $("#txtconfirmar").val(); 

  var clavemd5 = md5(passactual);

  if(passnuevo.length == 0 || passconfirmar.length == 0 ){
    swal("Alerta", "Uno o mas campos estan vacios", "info");
  }else {
    if(passnuevo==passconfirmar){
        var usu_id= $('#user_idx').val();
        $.post("../../controller/usuario.php?op=mostrar", { usu_id : usu_id}, function(dato){
            data = JSON.parse(dato);
            //alert (data.usu_pass +'=='+ clavemd5)
            if (data.usu_pass==clavemd5){
                
                $.post("../../controller/usuario.php?op=actualizarPassword", { usu_id : usu_id, usu_pass :passnuevo, pass_actual:passactual}, function(data){
                    swal("Correcto!", "Su contraseña fue actualizado con Exito", "success");
                    
                    $('#txtactual').val('');
                    $('#txtnuevo').val('');
                    $('#txtconfirmar').val('');
                    setTimeout( function() { window.location.href = "http://175.100.100.2:8080/GUARANDAHD"; }, 50000 );
  
                });
            }else{
                swal("Error!", "La Clave actual no corresponde..!", "error");
            }

        });

    }else{
        swal("Error!", "Las contraseñas no coinciden", "error");
    }
  }

});
